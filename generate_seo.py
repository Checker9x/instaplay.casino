import os
from datetime import datetime

DOMAIN = "https://instaplay.casino"
PREVIEW_DIR = "/Users/thedark/instaplay.casino/preview"

EXCLUDE_FILES = [
    "article-single.html"  # Exclude template files
]

def generate_sitemap():
    urls = []
    
    # Map for custom priorities
    priorities = {
        "": 1.0,
        "slots.html": 0.9,
        "live-casino.html": 0.9,
        "providers.html": 0.8,
        "promotions.html": 0.8,
        "jili.html": 0.8,
        "pgsoft.html": 0.8,
        "pragmatic.html": 0.8,
        "articles.html": 0.8,
    }

    # Map for custom changefreq
    changefreqs = {
        "": "daily",
        "slots.html": "daily",
        "live-casino.html": "daily",
        "articles.html": "daily",
    }
    
    for root, dirs, files in os.walk(PREVIEW_DIR):
        for file in files:
            if file.endswith(".html") and file not in EXCLUDE_FILES:
                filepath = os.path.join(root, file)
                rel_path = os.path.relpath(filepath, PREVIEW_DIR)
                
                # Normalize slashes for URL
                rel_url = rel_path.replace("\\", "/")
                
                # If index.html, it's the root
                if rel_url == "index.html":
                    rel_url = ""
                
                priority = priorities.get(rel_url, 0.6)  # Default priority 0.6
                if rel_url.startswith("articles/"):
                    priority = 0.7  # specific priority for articles
                
                changefreq = changefreqs.get(rel_url, "weekly")  # Default changefreq
                
                full_url = f"{DOMAIN}/{rel_url}" if rel_url else f"{DOMAIN}/"
                
                urls.append({
                    "loc": full_url,
                    "priority": priority,
                    "changefreq": changefreq
                })
                
    # Sort urls for consistent output (root first)
    urls.sort(key=lambda x: (-x["priority"], x["loc"]))
    
    sitemap_xml = '<?xml version="1.0" encoding="UTF-8"?>\n'
    sitemap_xml += '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n'
    
    for url in urls:
        sitemap_xml += f'  <url>\n'
        sitemap_xml += f'    <loc>{url["loc"]}</loc>\n'
        sitemap_xml += f'    <changefreq>{url["changefreq"]}</changefreq>\n'
        sitemap_xml += f'    <priority>{url["priority"]:.1f}</priority>\n'
        sitemap_xml += f'  </url>\n'
        
    sitemap_xml += '</urlset>\n'
    
    sitemap_path = os.path.join(PREVIEW_DIR, "sitemap.xml")
    with open(sitemap_path, "w", encoding="utf-8") as f:
        f.write(sitemap_xml)
        
    print(f"Generated {sitemap_path}")

def generate_robots_txt():
    robots_content = f"""User-agent: *
Allow: /

Sitemap: {DOMAIN}/sitemap.xml
"""
    robots_path = os.path.join(PREVIEW_DIR, "robots.txt")
    with open(robots_path, "w", encoding="utf-8") as f:
        f.write(robots_content)
        
    print(f"Generated {robots_path}")

if __name__ == "__main__":
    generate_sitemap()
    generate_robots_txt()
