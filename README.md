This is just a crazy idea
=========================

I'm a Joomla developer first and foremost, but I also fell inlove with Kohana 3. I love Kohana's clean and consistent framework.
How I wish Joomla was written in such a beautiful and easy way!

Kohana was written in such a way that it gets out of the way of developers. It's so flexible, and also very light, it can actually 
run inside Joomla. With some hacks here and there, I think I'll be able to make Kohana work flawlessly inside Joomla.

Once I achieve that goal, then I can enjoy the best of both worlds!

I was also checking Nooku, a framework for Joomla written by former Joomla 1.5 lead developer Johan Janssens. Unfortunately, I am
not impressed. So if I can make this integration work, I bet Kooja will be a tough competition to Nooku. 

I haven't considered all the repercussions of integrating Kohana into Joomla, but I'm crossing my fingers. I hope I can make this work.

Send me a message if you want to join this project!

Download the latest installable package [here](http://github.com/raeldc/kojo-project/tree/master/packages/)
==========================================================================================================

Performance
===========

Memory Footprint
----------------
**com_klinks**

	Joomla 1.6 Only: 4.0MB
	After Initializing Kohana: 4.4MB
	After Querying the jos_categories Table using Jelly ORM: 6MB
	After Displaying the View: 6.4MB
	Total Execution Time: .296 seconds
	Total Queries: 17 (Not using MPTT)
	
**com_weblinks**

	Total Memory Usage: 5MB
	Total Queries Logged: 12
	Total Memory Usage without Joomla: 1MB
	Total Execution Time: .268 seconds
	Total Queries: 12

**com_library**

	Joomla 1.5 Only: 5.3MB
	Total Memory Usage: 6.7MB
	Initializing Koowa: 5.3MB
	Total Memory Usage without Joomla: 1.4MB
	Total Queries: 13
	
**com_klibrary**

	Joomla 1.6 Only: 4.0MB
	After Initializing Kohana: 4.4MB
	