# Quillor
Quillor Website 

# Project Goals 
- To create the best Wordpress work flow 

# Feature Requirements 
## Development 
- Compatible with Boostrap 4.0 without CSS theme conflicts 
- Uses SASS 
- Has organized style sheet files and naming based on Boostrap naming conventions 

## Business 
- Must be easy for non-technical clients to update 
- Uses a simple page builder 
- Easy to create child pages
- Easy to add widgets

## DevOps
- Uses Flywheel for local development 
- Easy to migrate and update 
- Easy updating process for: 
	- Updating on LIVE for quick fixes 
	- Updating on STAGING for longer fixes 
	- Building custom parts in LOCAL for development upgrades 


# Questions to consider: 

## Updating the website 
- What is the best way to update the website content? 
	- Update directly on LIVE? 
	- Make a private page on LIVE and then publish it? 
	- Make a page on STAGING and then push it LIVE? 
	- Build in LOCAL and then push to STAGING and then push to LIVE? 
	- What if someone is working on LOCAL, but someone updates content on LIVE? 
		- How do you keep it up to date?

## Stylesheet management 
- What is the best way to add CSS to the website? (Listed quickest to longest): 
	- Inline CSS inside of Wordpress using DIVI? 
	- Adding Boostrap or CSS classes to elements? 
	- Adding CSS per page? 
	- Adding to a global CSS file? 
	- Adding to a SASS file on LOCAL, compiling it and then publishing to STAGING and then to LIVE. 


## Version Control 
- What is the best way to manage version control? 
	- Use Wordpress page history? 
	- Use Flywheel daily backups? 
	- Github? 

## What is the best development workflow? 
- FTP on STAGING or LOCAL? 



