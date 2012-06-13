Tested on: Wordpress 3.4

<strong>The Goal:</strong>

Have ALL wordpress files installed in subfolder and ALL theme files (html, images, js, etc..) exist in root.  The main wordpress theme files ALSO exist in root (functions.php, sidebar.php, etc...).  These are linked from inside the theme folder (wp-content/themes/themeName/) to root folder.

This would allow non wordpress files easily accessed using a standard URL reference: http://www.Website.com/news.htm. In a standard setup this requires placing the non wordpress file amidst the huge list of of wordpress files .

The new setup would look like this:

http://www.domain.com/Website.com/<br>
<p style="padding-left: 30px;">images/<br>
js/<br>
php/<br>
wp-site/ (all wordpress files)<br>
wp/ (wordpress theme files like: functions.php, etc... that are linked to from theme folder)<br>
index.php<br>
wp-index.php (file redirected from wp-site/wp-content/themes/LinkedTheme/)<br>
wp-front-page.php</p><br><br>
It's a bit more work in setup, but it makes editing the site far cleaner and easier to work with (in my opinion).  This is really designed for web designer who are use to non-wordpress sites (like myself).<br><br>
<strong>Short Version:</strong>

1. Install WP in target sub directory - ex: http://www.foo.com/myNewSite.com/wp-site (see Long Version)

2. Copy LinkedTheme folder into /wp-site/wp-content/themes/

3. Rename theme folder to site name

4. In theme, edit vars.php.  Point to installed folder.

5. Copy Linked Theme main files into main folder
<ul>
	<li>wp- files</li>
	<li>wp/ folder</li>
</ul>
6. Install Custom Post Template plugin
http://wordpress.org/extend/plugins/custom-post-template/
This allows for using custom pages for posts.
Theme is already setup for this.  Just duplicate the wp-postTemplate-1 file.  Theme is setup to support up to 20.  If more are needed, add them in the theme folder.

The page templates function the same way.  There are 20 setup.  Edit and duplicate wp-pageTemplate-1.

7. Activate the theme in WP.

8. In the main folder, edit the wp-vars.php file.

Set a var for the absolute path to the main folder:

$sitePath = "http://www.domain.com/Website.com/"

Use this in front of ALL files referenced in template pages:

&lt;img src="&lt;?php $sitePath ?&gt;/images/button.jpg"&gt;

This prevents problems with things like category URLs.

You may want to set "&lt;?php $sitePath ?&gt; as a hot key if you use a program like Texter (google it),  for speed of coding.

Now all your site files reside in one folder, just like a standard website.  You no longer have to dip into the wp-content/themes folder to make adjustments.

The site admin will be located in: http://www.domain.com/Website.com/wp-site/wp-admin

Please feel free to clone and add features.

Enjoy!

&nbsp;

<strong>Long Version:</strong>

Do the following:

Using<strong> Direct Install</strong> (Ideal and faster)
<ul>
	<li>Download latest version of wordpress</li>
	<li>Upload to desired subfolder and rename to "wp-site"</li>
	<li>Go to CPanel Database Setup &gt; Create a database -- can be any name</li>
	<li>Create a user then set as user for database with all privileges</li>
	<li>Go to the url: http://www.Domain.com/MainFolder/wp-site/wp-admin/install.php</li>
	<li>Agree to create a config file</li>
	<li>Fill in info from database -- and all other info</li>
	<li>Once installed, login</li>
	<li>In WP: go to Settings, and set the Site Address (URL) to main folder
<ul>
	<li>http://www.Domain.com/MainFolder</li>
</ul>
</li>
	<li>Copy the index.php from wp-site/ to MainFolder/</li>
	<li>Edit the index.php &gt; change <tt>"./wp-blog-header.php"</tt> to "./wp-site/wp-blog-header.php"</li>
</ul>
&nbsp;

Using Fantastico (CPanel):
<ul>
	<li>install theme in any folder on the root</li>
	<li>Login into the admin one time. This sets up the database</li>
	<li>Using CPanel&gt;File Manager, move wp folder to the desired subfolder and rename:
<ul>
	<li>domain.com/Website.com/wp-site (new wordpress folder)</li>
</ul>
</li>
	<li>Copy the index.php from wp-site/ to Website.com/</li>
	<li>Edit the index.php &gt; change <tt>"./wp-blog-header.php"</tt> to "./ newMainFolder/wp-blog-header.php"</li>
	<li>Using PHP-MyAdmin, go to the wordpress database just created. Will be called _wrdp(x). The (x) will be the highest number listed if more than one wordpress version is installed</li>
	<li>In side database, go to wp-options, and change the setting for siteurl to the NEW location of the wordpress files
<ul>
	<li>Do NOT use "www." in site name</li>
</ul>
</li>
	<li>Go to http://domain.com/wp-site/wp-admin &gt; Settings
<ul>
	<li>Be sure the Wordpress Address URL is set location of wordpress files folder</li>
	<li>Set the siteurl to location of the main folder (i.e. "http://www.Website.com")</li>
	<li>Set BOTH fields to use "http://<strong>www</strong>.domain" instead of http://domain</li>
</ul>
</li>
</ul>
