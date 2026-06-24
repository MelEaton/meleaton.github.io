# Off The Wall Murals — SEO & Content Strategy
_Goal: rank organically for mural painting in New Zealand and generate consistent enquiry leads._

---

## Where things stand at launch

- Site is live, indexed via Google Search Console, sitemap submitted
- GA4 tracking installed (G-GBRE0M8YTJ) — no meaningful data yet
- 23 portfolio items across three categories
- Good on-page foundations: meta descriptions, alt text, clean URLs
- **Gaps:** no Google Business Profile, no content section, no backlinks

---

## Priority 1 — Google Business Profile (do this week)

This is the highest-leverage action available right now. GBP puts you in the Google Maps pack and local search results — the section that appears above organic results for searches like "mural painter Canterbury" or "mural artist Christchurch". You can rank in the map pack before the organic listings even matter.

**Set it up at:** business.google.com

Steps:
1. Create a listing — business name: "Off The Wall Murals"
2. Category: **Mural Painter** (primary), add "Artist" and "Graphic Designer" as secondary
3. Service area: Canterbury (plus "New Zealand" for national reach)
4. Add your website, phone, and email
5. Upload 10–15 photos — use the optimised portfolio shots already on the site
6. Write a business description (suggested below)
7. Verify — Google will send a postcard to your address or offer video verification

**Suggested GBP description:**
> Off The Wall Murals designs and paints custom murals for hospitality venues, retailers, and commercial spaces across New Zealand. Led by Mel Eaton — muralist and brand designer — every project is handled end to end, from concept and digital mockup through to final brushstroke. Based in North Canterbury, painting nationwide.

Once live, ask your first few clients to leave a Google review. Reviews are a major ranking signal for the map pack.

---

## Priority 2 — Keyword targets

These are the terms worth owning. Grouped by intent:

**High-intent (people ready to commission):**
- mural painter New Zealand
- mural painting New Zealand
- commercial mural NZ
- mural commission NZ
- mural artist Canterbury
- mural painter Christchurch

**Research-phase (people exploring):**
- how much does a mural cost NZ
- how to commission a mural
- mural for cafe NZ / restaurant mural NZ
- community mural NZ / public art NZ

**Long-tail (niche but zero competition):**
- hospitality mural New Zealand
- retail mural painting NZ
- large scale mural New Zealand

The site currently targets the first group well on the services and commission pages. The research-phase terms are the content opportunity — they're what a blog/journal section captures.

---

## Priority 3 — Content strategy (journal section)

A journal section serves two purposes: ranking for research-phase keywords, and demonstrating expertise to potential clients who are comparing options. You don't need to post frequently — quality and consistency matter more.

**Suggested cadence:** one post per month, alternating between two types:

**Type A — Project stories** (easier to write, good for local SEO)
Each finished project is a story. A 300–500 word write-up with photos covering the brief, the challenge, and the outcome. These rank for location + project-type searches and give potential clients proof of your range.

Example titles:
- "The In Our Hands mural — Haast eagle comes to Rangiora"
- "Pixel Party at Ten Forward: gaming culture on a Canterbury wall"
- "Pulling Together — painting identity into the Cure Boat Club"

**Type B — Guides and explainers** (harder to write, higher SEO value)
These target the research-phase keywords directly and drive people into the commission funnel.

Priority articles (write these first):
1. **"How much does a mural cost in New Zealand?"** — the single most-searched question in this space. Be honest and specific. Link to the commission page.
2. **"What to expect when commissioning a mural"** — walks through the process. Reinforces the commission page content with more detail.
3. **"Commercial murals for hospitality venues: what works and what doesn't"** — positions you as the expert for your primary client type.

---

## Priority 4 — Monthly monitoring rhythm

**Tools:** Google Analytics 4 + Google Search Console (both now connected)

**Monthly review — 30–45 minutes, first week of each month:**

In Search Console:
- **Performance → Search results**: which queries are bringing impressions and clicks? Are the target keywords starting to appear?
- **Coverage**: any new errors or excluded pages?
- **Core Web Vitals**: any flags?

In GA4:
- **Reports → Acquisition → Traffic acquisition**: where is traffic coming from? (organic search, direct, social, referral)
- **Reports → Engagement → Pages and screens**: which pages get the most views, and which have the highest engagement time?
- **Conversions**: is anyone hitting the contact form? (Set up a conversion event for Formspree form submissions — see below)

**What to watch for:**
- Organic traffic growing month-on-month = strategy working
- High bounce on commission.html = something's putting people off, investigate
- Contact form conversions = the actual goal metric

**Setting up a GA4 conversion event for contact form:**
The Formspree form redirects to a thank-you URL after submission. If you set that redirect URL to `/thankyou.html` (a page you create), you can track it as a conversion in GA4. Worth doing — otherwise you're flying blind on actual leads. Flag this and we can set it up together.

---

## Priority 5 — On-page SEO improvements (existing pages)

A few targeted improvements to the existing pages:

**services.html** — currently the weakest SEO page. The heading is "What we do" which is generic. Consider:
- Adding an H2 like "Mural painting for commercial spaces across New Zealand" to target the primary keyword directly
- The page could mention specific venue types more explicitly (cafes, restaurants, retail) for long-tail search

**work.html** — 23 projects but Google can't easily read the modal content (it's loaded via JS). Each project's title and description lives inside a modal — not ideal for indexing. Long-term option: give each project its own page (a bigger rebuild, not urgent). Short-term: ensure the category headings and project names in the static HTML are keyword-rich.

**index.html** — the hero subheading "Bespoke mural painting for hospitality, retail, and commercial interiors" is good. The page could benefit from a visible mention of "New Zealand" in the main body copy (it's in the meta description but not prominent on the page itself).

---

## Portfolio update workflow (for new projects)

The workflow established during the build:
1. Optimise photos: resize to 1600px max edge, JPEG quality 82, save to `assets/img/work/<category>/<ProjectFolder>/`
2. Add card image (`card_*.jpg`) and header image (`header_*.jpg`)
3. Wire up modal in `work.html` — copy the pattern from an existing project in the same category
4. Write alt text for every image (specific, descriptive — not generic)
5. Write project description following the tone guide in `OTW_Portfolio_-_Website_Descriptions_edited.docx`
6. Update `sitemap.xml` lastmod date for work.html
7. Commit and push

**Casing reminder:** folder and file names are case-sensitive on GitHub Pages. Always match exactly.

---

## Backlinks (lower priority, worth noting)

Backlinks are hard to build but valuable. Natural opportunities for OTW:
- **Local business directories**: NZ Business, Localist, Yellow — add a listing with a link to the site
- **Client websites**: ask clients if they'll add a credit/link ("Mural by Off The Wall Murals") — even one or two from established local businesses helps
- **Instagram bio link**: already done, but make sure Facebook and LinkedIn also link to the site
- **Local press**: a good project story sent to a local paper (The Rangiora Bulletin, Stuff Canterbury) occasionally gets picked up — each article is a backlink

---

## 6-month milestones

| Milestone | Target |
|---|---|
| GBP live and verified | Week 1 |
| First journal post published | Month 1 |
| Appearing in GSC for 10+ target queries | Month 2 |
| Contact form conversion tracking live | Month 1 |
| 3 journal posts live | Month 3 |
| First organic enquiry attributed to search | Month 3–4 |
| Map pack appearance for Canterbury searches | Month 2–3 |
| Ranking page 1 for "mural painter NZ" | Month 6–12 |

The last one is a stretch goal — NZ competition in this space is low, but new sites take time to build domain authority. Consistent content and GBP reviews are the fastest path there.

