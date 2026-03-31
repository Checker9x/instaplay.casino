import os
import re

preview_dir = '/Users/thedark/instaplay.casino/preview'

for root, _, files in os.walk(preview_dir):
    for file in files:
        if file.endswith('.html'):
            path = os.path.join(root, file)
            with open(path, 'r', encoding='utf-8') as f:
                content = f.read()

            # Remove the orphaned placeholder-text and the extra closing div
            cleaned = re.sub(r'<div class="placeholder-text"[^>]*>.*?</div>\n[ \t]*</div>', '', content, flags=re.DOTALL)
            
            if cleaned != content:
                with open(path, 'w', encoding='utf-8') as f:
                    f.write(cleaned)
