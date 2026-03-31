import os
import re

preview_dir = '/Users/thedark/instaplay.casino/preview'
articles_dir = os.path.join(preview_dir, 'articles')

if not os.path.exists(articles_dir):
    os.makedirs(articles_dir)

old_article_path = os.path.join(preview_dir, 'article-single.html')
new_article_path = os.path.join(articles_dir, 'jili-super-ace-strategy.html')

if os.path.exists(old_article_path):
    with open(old_article_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Update Asset Paths to step up one directory
    content = content.replace('href="assets/', 'href="../assets/')
    content = content.replace('src="assets/', 'src="../assets/')
    
    # 2. Update Navigation Links to step up one directory
    pages = [
        'index.html', 'slots.html', 'live-casino.html', 'providers.html', 
        'promotions.html', 'about-us.html', 'articles.html', 'jili.html', 
        'pgsoft.html', 'pragmatic.html', 'register-guide.html', 
        'gcash-guide.html', 'responsible-gaming.html'
    ]
    for page in pages:
        content = content.replace(f'href="{page}"', f'href="../{page}"')
        
    # Write the new customized SEO URL article layout
    with open(new_article_path, 'w', encoding='utf-8') as f:
        f.write(content)
        
    # Remove the old one from root
    os.remove(old_article_path)

# 3. Update the main articles.html index page to link to the new folder structure
articles_index = os.path.join(preview_dir, 'articles.html')
if os.path.exists(articles_index):
    with open(articles_index, 'r', encoding='utf-8') as f:
        idx_content = f.read()
        
    # Replace all 4 article card links with pointers to the new template
    idx_content = idx_content.replace('href="article-single.html"', 'href="articles/jili-super-ace-strategy.html"')
    
    with open(articles_index, 'w', encoding='utf-8') as f:
        f.write(idx_content)
        
print("Article Folder Restructure Complete!")
