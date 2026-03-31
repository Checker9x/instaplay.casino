import os
import re

preview_dir = '/Users/thedark/instaplay.casino/preview'

with open(f'{preview_dir}/index.html', 'r', encoding='utf-8') as f:
    text = f.read()

# Grab the header and footer surrounding the main element directly from the index.html
parts = re.split(r'<main[^>]*>', text)
header_part = parts[0] + '<main id="primary" class="site-main page-template">'
footer_part = parts[1].split('</main>')[1]

files = [
    'slots.html', 'live-casino.html', 'providers.html', 'promotions.html',
    'about-us.html', 'articles.html', 'article-single.html', 'jili.html',
    'pgsoft.html', 'pragmatic.html', 'register-guide.html',
    'gcash-guide.html', 'responsible-gaming.html'
]

for html_file in files:
    file_path = f'{preview_dir}/{html_file}'
    if os.path.exists(file_path):
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        main_match = re.search(r'<main[^>]*>(.*?)</main>', content, re.DOTALL)
        if main_match:
            main_content = main_match.group(1)
            final_html = header_part + '\n' + main_content + '\n</main>' + footer_part
            with open(file_path, 'w', encoding='utf-8') as out:
                out.write(final_html)
