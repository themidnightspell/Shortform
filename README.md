# ShortForm

What we’re building
Shortform is an online platform dedicated to the short-form film industry; from cast and crew, to production companies and agencies, to festivals and schools. This project can get complex quite quickly and might fall beyond the scope of the class, thus we have decided to boil it down to the essential core feature: an interactive directory for the short-form industry.

Shortform consists of a homepage featuring curated works and playlists to celebrate films of artistic merit. Playlists can also be generated from tags (i.e. category, genre, length, format, budget, location, language) assigned to films.

For exploration, we plan on implementing a directory page with filter options, as well as a search-engine function as well to give users the ability to look-up projects using specific keywords. Every element (film, cast and crew, production companies, agencies, film festivals, and film schools) has a page which hyperlinks connected elements to allow the user to hop from one page to another to discover and explore the directory organically.

Additionally, we plan on developing a submission page where a project’s information and supporting media can be submitted to be reviewed by the team before listing.

Wait, but why?
LinkedIn serves as a platform for professionals to network, discover industry trends, and explore new content. IMDb serves that purpose, albeit strictly for Hollywood. For workers in the short-form industry, Instagram, LinkedIn and Vimeo serve some of those needs.

Miu Nakata and Aram Baali, two members of the group, are both film students at the Moody College of Communication. Both struggle to keep up with industry trends, network, and meet local collaborators.

Film festivals and screenings are transient events; dedicated websites for older runs most often get taken down, which makes it cumbersome, if not impossible, to reference films previously screened. Furthermore, such websites are often designed as web posters without links to peer festivals or to other pages within the same website.

We couldn’t locate a web directory of short form content. Shortform would be that directory, allowing users to find details/information about specific projects, discover new projects and artists, locate production companies and local crews.

Exhibit A: the end-of-semester screenings at UT for Fall 2021 featured a lackluster attempt to have web versions of the screening programs. The program handouts featured QR-codes linking to PDF documents hosted on Google Drive!

Exhibit B: last week, in an attempt to reference a film he watched at a local film festival, Baali had to resort to the Internet Archive to locate the information on the festival’s website for its 2018 run, which the organizers took down. The website didn’t feature any hyperlinks and was simply a web poster. Thus, Baali had to conduct further research using Instagram's and Vimeo’s clunky search functions to find information about the director’s current work.

How we’re approaching it…
We plan on collecting our initial “dataset” from the UT end-of-semester screenings and local film festivals (SXSW, Austin Film Festival, etc.). Then, we would branch out to other film schools and festivals. We believe this approach would allow us to get a steady stream of visitors to our website as Shortform’s directory would feature film projects they care about.

HTML and CSS will be used to provide the basic structure and style of our site.

We plan on implementing a form, available to the public, to suggest film projects to be displayed on the site; the form would use a PHP script to process form data and JavaScript front end form verification.

Our trending page, with generated playlists and recommendations, would maintain state through the use of cookies to suggest content to be displayed through dynamic HTML features to the end user.

Information like film titles; cast, crew and production information; and promotional content will be stored in a MySQL database. A PHP interface would link to the MySQL database to pull information to be displayed on the website; home, trending, projects, cast, crew, production company, and playlists pages.

Additionally, some of the pages would feature annotated links to webpages of interests as well as a related news box/module. Project pages could also feature locally-hosted video content, or videos embedded from Vimeo or YouTube.
