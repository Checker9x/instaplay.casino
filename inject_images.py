import os
import re

preview_dir = '/Users/thedark/instaplay.casino/preview'

image_map = {
    'index.html': {
        'img': 'hero-home.png',
        'alt': 'Instaplay Casino Neon Cyberpunk Homepage Hero representing instant GCash payouts',
        'caption': 'Play premium 3D slots with instant API integrations exclusively at Instaplay.ph'
    },
    'slots.html': {
        'img': 'hero-slots.png',
        'alt': 'Glowing JILI and PG Soft Slot Machines triggered golden jackpot cascades',
        'caption': 'Unthrottle your variance with 2500+ un-capped slot games.'
    },
    'live-casino.html': {
        'img': 'hero-live.png',
        'alt': 'High Roller Live Dealer Baccarat table with glowing neon purple glass aesthetics',
        'caption': 'Stream Evolution Gaming Live Dealers in ultra-low latency direct to your mobile.'
    },
    'providers.html': {
        'img': 'hero-slots.png',
        'alt': 'Glowing Slot Machines cascading golden jackpot coins',
        'caption': 'Direct official API partnerships with top global casino game studios.'
    },
    'promotions.html': {
        'img': 'hero-promo.png',
        'alt': 'Premium iGaming neon glowing VIP bonuses and free spin boxes',
        'caption': 'Claim massive daily cashback, zero-turnover rewards, and exclusive VIP tier prizes.'
    },
    'about-us.html': {
        'img': 'hero-home.png',
        'alt': 'Cyberpunk modern online casino brand representation',
        'caption': 'The most trusted real-money e-gaming platform in the Philippines.'
    },
    'articles.html': {
        'img': 'hero-promo.png',
        'alt': 'Premium online casino news and intelligence platform hero banner',
        'caption': 'Explore insider slot strategies, industry news, and technical platform guides.'
    },
    'jili.html': {
        'img': 'hero-slots.png',
        'alt': 'JILI Super Ace glowing slot machine winning cascade',
        'caption': 'Maximize your multiplier potential on JILI titles.'
    },
    'pgsoft.html': {
        'img': 'hero-slots.png',
        'alt': 'Mahjong Ways cascading slot machine glowing neon banner',
        'caption': 'Experience cinematic portrait-mode mechanics.'
    },
    'pragmatic.html': {
        'img': 'hero-slots.png',
        'alt': 'Gates of Olympus Pragmatic Play high-variance jackpot drop',
        'caption': 'Trigger extreme global progressive drops on Pragmatic.'
    },
    'register-guide.html': {
        'img': 'hero-live.png',
        'alt': 'Secure neon casino registration interface aesthetic',
        'caption': 'Register securely in 60 seconds with full biometric encryption.'
    },
    'gcash-guide.html': {
        'img': 'hero-promo.png',
        'alt': 'Glowing VIP bonuses representing instant GCash credit transfers',
        'caption': 'Zero-fee API caching directly into your wallet.'
    },
    'responsible-gaming.html': {
        'img': 'hero-live.png',
        'alt': 'Responsible gaming trust and safety live casino protocols',
        'caption': 'Enjoy gambling as entertainment with full protection algorithms.'
    }
}

for root, _, files in os.walk(preview_dir):
    for html_file in files:
        if html_file.endswith('.html') and html_file in image_map:
            file_path = os.path.join(root, html_file)
            data = image_map[html_file]
            
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()

            # Find the exact hero structure
            # <div class="hero-visual"> \n <div class="hero-image-placeholder... </div> \n </div>
            # Or <div class="hero-image-placeholder glass" ...</div>
            
            replacement = f'''
            <figure class="hero-image-wrapper" style="margin: 0; padding: 0; width: 100%; height: 100%; border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.5);">
                <img src="assets/img/{data['img']}" alt="{data['alt']}" title="{data['caption']}" style="width: 100%; height: 100%; object-fit: cover; transform: scale(1.02); transition: transform 0.3s ease;">
                <figcaption style="display: none;">{data['caption']}</figcaption>
            </figure>
            '''
            
            # Use regex to fully replace the old div class="hero-image-placeholder"
            new_content = re.sub(r'<div class="hero-image-placeholder[^>]*>.*?</div>', replacement, content, flags=re.DOTALL)
            
            with open(file_path, 'w', encoding='utf-8') as out:
                out.write(new_content)
                
print("HTML Files Image Injection and SEO mapping complete!")
