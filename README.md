# write
simple "blogging" engine i use locally to journal my to-dos and miscellaneous thoughts.

# installation
- download and install [php markdown](https://michelf.ca/projects/php-markdown/)
  - copy Michelf directory to %webserverroot%/php/pear
    - attempting to install using pear didn't work for me
- in a command line, navigate to where you will store the source files; type:
<pre>
git clone https://github.com/tateoeng/write.git
</pre>
- edit write; change the lines as appropriate:
<pre>
export webaddy=http://localhost
export author="Msr. Your Name, Esq."
export journal=/absolute/path/to/journal
export editor=/absolute/path/to/editor.exe
</pre>
- back at the command line
- copy journal/ and all *.* to root directory where you want your installation; then
<pre>
chmod 500 write
./write
</pre>
- start apache, if it isn't already
- point a browser to the root of your installation
- edit %installroot%/journal/YYYY/MM/DD/index.md to edit the content

# to-dos
- generate a link list of archived posts; link to archive index
- fix the "both shims" issue with a "proper" "installer"
