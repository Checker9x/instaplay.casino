import os
import re

preview_dir = '/Users/thedark/instaplay.casino/preview'
theme_dir = '/Users/thedark/instaplay.casino/instaplay-theme'

with open(f'{preview_dir}/index.html', 'r', encoding='utf-8') as f:
    text = f.read()

header_part, rest = text.split('<main id="primary" class="site-main">')
footer_part = rest.split('</main>')[1]

files = {
    'page-slots.php': 'slots.html',
    'page-live-casino.php': 'live-casino.html',
    'page-providers.php': 'providers.html',
    'page-promotions.php': 'promotions.html',
    'page-about-us.php': 'about-us.html',
    'page-articles.php': 'articles.html',
    'single.php': 'article-single.html',
    'page-jili.php': 'jili.html',
    'page-pgsoft.php': 'pgsoft.html',
    'page-pragmatic.php': 'pragmatic.html',
    'page-register-guide.php': 'register-guide.html',
    'page-gcash-guide.php': 'gcash-guide.html',
    'page-responsible-gaming.php': 'responsible-gaming.html'
}

for php_file, html_file in files.items():
    with open(f'{theme_dir}/{php_file}', 'r', encoding='utf-8') as f:
        php_content = f.read()
        
    main_match = re.search(r'<main[^>]*>(.*?)</main>', php_content, re.DOTALL)
    if main_match:
        main_content = f'<main id="primary" class="site-main page-template">\n{main_match.group(1)}\n</main>'
        final_html = header_part + main_content + footer_part
        with open(f'{preview_dir}/{html_file}', 'w', encoding='utf-8') as out:
            out.write(final_html)

print("Building sitemap and robots.txt...")
os.system("python3 generate_seo.py")
