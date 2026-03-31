import os
import re

preview_dir = '/Users/thedark/instaplay.casino/preview'

gtag_code = """
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7Q43F3FBX9"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-7Q43F3FBX9');
	</script>
</head>"""

for root, _, files in os.walk(preview_dir):
    for file in files:
        if file.endswith('.html'):
            path = os.path.join(root, file)
            with open(path, 'r', encoding='utf-8') as f:
                content = f.read()

            # Ignore if already injected
            if "G-7Q43F3FBX9" not in content:
                content = content.replace('</head>', gtag_code)
                with open(path, 'w', encoding='utf-8') as f:
                    f.write(content)
