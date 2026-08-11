# Facts to Verify Before Launch

This document lists every statistic, date, partner reference, or other
factual claim on the Global Mothers United website that could not be
verified against a source in this repository. **None of these claims were
invented, strengthened, or altered during the Phase 4 editorial pass** —
they are reproduced here exactly as they currently appear on the live
templates, unchanged, per the project's standing rule (see `CLAUDE.md`):
unverified claims are flagged for the site owner to confirm, not edited or
removed on assumption.

For each item: the exact current wording, where it appears, why it needs
confirmation, what to check, and a recommendation for what's safe to do if
the fact cannot be confirmed before launch.

---

## 1. "10,000+" / "10K+" mothers supported

- **Exact claim:** "10,000+ Mothers supported across the US and globally
  through our programs and partner network." / "10K+ Mothers supported
  through our programs"
- **Where:** `front-page.php` — hero stat card (line 26–27) and stats band
  (line 122)
- **Why it needs confirmation:** No source, date, or methodology is given
  for this figure anywhere in the repository.
- **What to verify:** Is 10,000+ an actual, current, defensible count of
  people served (and over what time period)? Who owns this number
  internally?
- **If unconfirmable before launch:** Safe to generalize (e.g. "Mothers
  across our community" with no number) rather than publish an
  unverified precise figure. Removing the number entirely is lower-risk
  than guessing a smaller one.

## 2. "50+" community/nonprofit partners

- **Exact claim:** "50+ Community Partners" / "50+ Nonprofit and
  community partners nationwide"
- **Where:** `front-page.php` — hero stat card (line 29) and stats band
  (line 123)
- **Why it needs confirmation:** No partner list or directory exists
  anywhere in the site to substantiate this count.
- **What to verify:** Does an actual list of 50+ named partner
  organizations exist? Is "nationwide" accurate?
- **If unconfirmable:** Safe to generalize to "a growing network of
  partners" or similar, or remove the number.

## 3. "12" active programs

- **Exact claim:** "12 Active Programs" / "12 Active programs across the
  US"
- **Where:** `front-page.php` — hero stat card (line 30) and stats band
  (line 124)
- **Why it needs confirmation:** Only 3 named programs (Military Love &
  War, From Homeless to Billionaires, Inner Circle 10X) appear anywhere
  on the site. It's unclear whether "12" refers to program variants,
  cohorts, chapters, or something not otherwise described.
- **What to verify:** What are the other ~9 programs, or does "12" mean
  something else (e.g. 12 cohorts run per year)? If so the copy should
  say that explicitly.
- **If unconfirmable:** This is the highest-risk number on the site,
  since it's not just unverified but appears inconsistent with the rest
  of the page (which only ever describes 3 programs). Safe to generalize
  to "multiple programs" or remove until the discrepancy is resolved.

## 4. "3" flagship programs

- **Exact claim:** "3 Flagship programs: Military, Empowerment,
  Leadership"
- **Where:** `front-page.php` — stats band (line 125)
- **Why it needs confirmation:** This one is internally consistent (it
  matches the 3 named programs described elsewhere), so it's lower risk
  than items 1–3, but it's still an unsourced count.
- **What to verify:** Confirm this is intentional and current.
- **If unconfirmable:** Low risk; safe to leave as-is since it's
  consistent with the rest of the site's own content.

## 5. "Across the US and globally" / "around the world" reach claims

- **Exact claim:** "Mothers supported across the US and globally through
  our programs and partner network." (`front-page.php:27`)
- **Where:** `front-page.php`, hero stat card
- **Why it needs confirmation:** This implies actual international
  operations. Every other specific detail on the site (Veterans Affairs,
  NCATA, named events, "nationwide" partners) is US-specific, with no
  evidence of international programs.
- **What to verify:** Does Global Mothers United operate outside the US,
  or is "globally" aspirational/inaccurate?
- **If unconfirmable:** Safe to narrow to "across the US" only. (Note: a
  softer, non-numeric version of this same claim — "connect with mothers
  around the world" on the Media page — was already generalized to
  "connect with other mothers" during this editorial pass, since it
  carried no specific number and dropping it required no invented
  replacement fact.)

## 6. Veterans Affairs partnership

- **Exact claim:** Appears multiple times, e.g. "We partner with Veterans
  Affairs, community organizations, and peer support networks..."
- **Where:** `front-page.php` (mission pillar, partner band), `page-programs.php`
  (Military Love & War body + Partners detail row), `page-events.php`
  (From Homeless to Billionaires workshop card), `page-contact.php`
  (Partnerships info)
- **Why it needs confirmation:** "Veterans Affairs" reads as a reference
  to the US Department of Veterans Affairs, a federal government agency.
  Claiming a partnership with a federal agency is a serious claim that
  requires documentation (e.g. an MOU, a named VA program, or a specific
  VA office/contact) if it's going to stay on a public site.
- **What to verify:** Is there a real, current, named partnership or
  referral relationship with the VA (or a specific VA office/program)?
  Get this in writing before launch if it isn't already documented.
- **If unconfirmable:** Do not publish. This is the single highest-risk
  claim on the site because it names a government agency specifically.
  If the relationship is informal or aspirational, replace with accurate
  language (e.g. "veteran support organizations" instead of "Veterans
  Affairs") rather than removing the sentence outright.

## 7. NCATA partnership

- **Exact claim:** "...Veterans Affairs, CPAs, NCATA, and community
  organizations..." and a dedicated event, "NCATA Community Partnership
  Event."
- **Where:** `front-page.php` (mission pillar, partner band),
  `page-events.php` (NCATA Community Partnership Event card),
  `page-contact.php` (Partnerships info)
- **Why it needs confirmation:** "NCATA" is not expanded anywhere on the
  site (it could refer to several different organizations depending on
  industry — e.g. the National Council for Advanced Transportation
  Agencies, or a regional/trade association). A named event ("NCATA
  Community Partnership Event") implies an active, confirmed
  relationship.
- **What to verify:** What does NCATA stand for in this context, and is
  there a real, current partnership or scheduled event with them?
- **If unconfirmable:** Do not publish the named event until confirmed.
  The generic mentions in partner lists are somewhat lower risk but
  should still be confirmed before launch.

## 8. CPA partnerships (generic)

- **Exact claim:** "CPAs" appears repeatedly as a partner category (not a
  named firm), e.g. "We work alongside CPAs, financial coaches, and
  housing partners..."
- **Where:** `front-page.php`, `page-programs.php` (From Homeless to
  Billionaires), `page-get-involved.php`, `page-contact.php`
- **Why it needs confirmation:** Lower risk than Veterans Affairs/NCATA
  since no specific firm is named, but it still asserts an active
  professional-services partnership category.
- **What to verify:** Is there at least one real CPA or accounting
  partner currently providing the described support (financial literacy,
  CPA referrals)?
- **If unconfirmable:** Lower-risk to generalize to "financial
  professionals" if no CPA relationship currently exists.

## 9. Wadsworth community organizations

- **Exact claim:** "Wadsworth community organisations" (Programs page,
  partner band) — appears twice, referencing a specific place name
  (Wadsworth).
- **Where:** `front-page.php` (partner band), `page-programs.php` (From
  Homeless to Billionaires Partners row), `page-events.php` (NCATA
  Community Partnership Event card)
- **Why it needs confirmation:** "Wadsworth" is a specific, named
  location, which makes this a more concrete and checkable claim than
  the generic partner categories, but there's no other detail (which
  Wadsworth, what organizations) anywhere on the site.
- **What to verify:** Confirm which Wadsworth-area organizations this
  refers to, and that the relationship is current.
- **If unconfirmable:** Safe to generalize to "local community
  organizations" if the specific relationship can't be confirmed.

## 10. Event: Military Love & War — Community Night (Jul 23, 2026)

- **Exact claim:** Date "Jul 23, 2026," time "6:00 PM EST," format "Zoom +
  In-Person," cost "Free"
- **Where:** `front-page.php` (events teaser), `page-events.php`
  (featured event + event list)
- **Why it needs confirmation:** A specific future date/time/format for a
  real event is a firm commitment once published.
- **What to verify:** Confirm the event is actually scheduled and the
  logistics (time, venue/Zoom link, cost) are still accurate close to
  launch.
- **If unconfirmable:** Do not publish a specific date that isn't
  confirmed; use "date to be announced" instead, consistent with how the
  site already handles two other events.

## 11. Event: Inner Circle 10X — October Cohort Opens (Oct 1, 2026)

- **Exact claim:** Date "01 Oct 2026" / "October 1," described as "next
  cohort opens," "Monthly cohort," "$100K mindset"
- **Where:** `front-page.php`, `page-programs.php` (Inner Circle 10X
  body + Intake detail row), `page-events.php`
- **Why it needs confirmation:** Same as above (firm date commitment),
  plus "$100K mindset" is program-outcome-adjacent language that could be
  read as an implied income promise to participants.
- **What to verify:** Confirm the October 1 date is accurate, and confirm
  "$100K mindset" is intended as branding/theme language rather than an
  outcome guarantee (nonprofit/coaching programs should avoid language
  that could be read as promising specific financial results).
- **If unconfirmable:** Update the date if it changes. Consider having
  legal/compliance review "$100K mindset" specifically, since it's the
  one phrase on the site closest to an outcome claim.

## 12. Event: From Homeless to Billionaires — Full-Day Workshop (TBA)

- **Exact claim:** "Veterans Affairs and CPA partners in attendance"
  (date listed as "TBA")
- **Where:** `front-page.php`, `page-events.php`
- **Why it needs confirmation:** Same Veterans Affairs concern as item 6,
  specifically tied to a named upcoming event with claimed attendance.
- **What to verify:** Confirm VA and CPA representatives are actually
  confirmed to attend before publishing this claim.
- **If unconfirmable:** Remove the named-attendee claim until confirmed;
  the event itself can still be listed as TBA without it.

## 13. Event: NCATA Community Partnership Event (TBA)

- **Exact claim:** Event name itself asserts a "partnership" with NCATA.
- **Where:** `page-events.php`
- **Why it needs confirmation:** Same as item 7.
- **What to verify:** See item 7.
- **If unconfirmable:** Do not publish this event listing until the NCATA
  relationship is confirmed.

## 14. Contact email address

- **Exact claim:** `info@globalmothersunited.org`
- **Where:** `page-contact.php` (mailto link), and `README.txt` (which
  already flags this exact address as needing verification before
  launch)
- **Why it needs confirmation:** This is not a "soft" marketing claim —
  if the mailbox isn't monitored, real inquiries will be lost. The
  project's own README already calls this out.
- **What to verify:** Confirm this mailbox exists, is monitored, and is
  the correct public contact address.
- **If unconfirmable:** Do not launch with an unconfirmed contact
  address. This should be the easiest item on this list to verify and
  should be resolved regardless of the others.

## 15. Media page placeholder content

- **Exact claim:** N/A — this is flagged as placeholder, not a factual
  claim. Entries like "Podcast Name Here," "Publication Name," "Interview
  title goes here" are explicit template placeholders (not claims of
  real coverage).
- **Where:** `page-media.php`
- **Why it's listed here:** Not a fact-check item, but a launch-readiness
  item: this page should not go live with placeholder rows still in
  place, since a visitor could mistake them for real (if sparse)
  coverage.
- **What to verify:** Replace with real podcast/video/press entries, or
  keep the page unpublished/hidden until at least one real entry exists.
- **If unconfirmable/no content yet:** Safe to leave the page down or add
  a plain "coming soon" note rather than publish placeholder rows as if
  they were real.

---

## Summary table

| # | Claim | Risk if wrong | Recommended fallback |
|---|---|---|---|
| 1 | 10,000+ mothers supported | Medium | Generalize / remove number |
| 2 | 50+ partners | Medium | Generalize / remove number |
| 3 | 12 active programs | **High** (internally inconsistent with rest of site) | Generalize / remove number |
| 4 | 3 flagship programs | Low | Leave as-is once confirmed |
| 5 | "Globally" / "worldwide" reach | Medium | Narrow to "across the US" |
| 6 | Veterans Affairs partnership | **High** (names a federal agency) | Do not publish unconfirmed |
| 7 | NCATA partnership/event | **High** | Do not publish unconfirmed |
| 8 | CPA partnerships (generic) | Low–Medium | Generalize to "financial professionals" |
| 9 | Wadsworth community orgs | Medium | Generalize to "local community organizations" |
| 10 | Jul 23, 2026 event details | Medium | Mark TBA if not locked in |
| 11 | Oct 1, 2026 cohort + "$100K mindset" | Medium–High | Confirm date; legal review of outcome-adjacent language |
| 12 | VA/CPA attendance at workshop | **High** | Remove attendee claim until confirmed |
| 13 | NCATA Community Partnership Event | **High** | Do not publish unconfirmed |
| 14 | Contact email address | **High** (operational, not just reputational) | Confirm before any launch |
| 15 | Media page placeholders | Medium (looks unfinished) | Replace or hide page |
