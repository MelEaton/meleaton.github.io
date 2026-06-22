# Google Search Console Setup
_For offthewallmurals.nz — complete once robots.txt and sitemap.xml are live_

## 1. Add the property

1. Go to [search.google.com/search-console](https://search.google.com/search-console)
2. Sign in with your Google account (the one linked to the GA property G-GBRE0M8YTJ)
3. Click **Add property**
4. Choose **URL prefix**, enter: `https://www.offthewallmurals.nz`
5. Click **Continue**

## 2. Verify ownership (HTML tag method — easiest for a Jekyll site)

1. Google will show you a `<meta name="google-site-verification" content="XXXX..." />` tag
2. Copy the full tag
3. Open `_includes/nav.html` (or the `<head>` section of `index.html`)
4. Paste it inside `<head>` — anywhere before `</head>`
5. Commit and push to GitHub — wait a few minutes for Pages to rebuild
6. Back in Search Console, click **Verify**

_Alternative: DNS verification via your domain registrar — no code change needed, but requires editing a TXT record in your DNS settings._

## 3. Submit the sitemap

1. In Search Console, click **Sitemaps** in the left sidebar
2. In the "Add a new sitemap" field, enter: `sitemap.xml`
3. Click **Submit**
4. Status should change to "Success" within a few minutes (sometimes up to 24 hours)

## 4. What to check in the first few weeks

- **Coverage** — any pages marked as errors or excluded? Common issue: 404s from old URLs or casing bugs (see handoff doc)
- **Performance** — which search queries are bringing people in, which pages rank
- **Core Web Vitals** — flags any load/layout issues Google has detected
- **Links** — any external sites linking to OTW yet?

---

_The GA property (G-GBRE0M8YTJ) handles on-site behaviour; Search Console handles how Google sees and indexes the site. Both are worth reviewing together once there's a few weeks of real traffic._
