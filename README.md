# Conditionally Deactivate Wordpress Plugins
This code can deactivate a WordPress plugin for specific pages/posts

# Problems
After implementing Accelarated Mobile Pages (AMP) on my blog I faced some critical issues like this one 'Prohibited or invalid use of HTML Tag (Critical)'. A plugin named WP Ads Pro was pushing an attribute named 'duration' for ads and it is prohibited by AMP.
So I searched for a WP Plugin to deactivate plugin for AMP pages but there was none.

# Solution
Wordpress has a system to load must-using plugins first. So I wrote this php code to solve the problem.

# Steps
1. Create a folder named 'mu-plugins' in '/wp-content/' folder.
2. Edit load.php with your customization.
3. Paste load.php in 'mu-plugins' folder.
4. Clear cache. You're done!
