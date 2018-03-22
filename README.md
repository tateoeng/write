# write
simple "blogging" engine i use locally to journal my to-dos and miscellaneous thoughts.

# installation
install markdown.pl in your cgi-bin. also, mathjax should be on your server. make sure SSIs and PHP are enabled and that index.shtml is recognized as a homepage.

copy the css file to wherever you put your css files. or use your own css file. whatever.

### in shim.php (both shims!)
- line 7: change markdown class, if desired
- line 9: change the time zone
- line 12: change URL as appropriate
- line 24: point to the mathjax installation
- line 25: point to the location of your css file

determine the root directory of your blog from the outside and from your side. copy the 0000 directory and contents to the local root directory where your blog will be.

update the three variables at the top of the script called "write," then move this script to your path. run the script from the command line.

edit the index.md file in the directory tree corresponding to today's date. for example, if today is the 21st of March, 2018, edit the file in `/path/to/blog/root/YYYY/MM/DD/index.md` where YYYY is the current year, MM is the numerical month (using leading zeros, if applicable), and DD is the numerical day of the month. posts are written in markdown. once finished, and periodically before, save your day's entry. start your webserver and point it to your root directory.

# to-dos
- specify desired editor; open the new index.md file in the specified editor.
- generate a link list of archived posts; link to archive index
- fix the "both shims" issue with a "proper" "installer"
