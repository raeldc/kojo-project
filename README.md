Quick Summary of why KoJo is Good
=================================

*	**It's very easy to learn**
*	**Consistent API**. Fully compliant with PHP 5 Object Oriented Programming
*	**Allows you to write less code**. You've heard this cliche many times, but you can [Compare it with Nooku](http://github.com/raeldc/kojo-klibrary).
*	**Runs on Joomla 1.6**. Future proof!	
*	**Take your skills with KoJo outside Joomla**! KoJo is based on a mature, stable, and highly acclaimed PHP Framework.
*	**No restrictive naming conventions**. Class naming convention is the most practical you'll ever see.
*	**Override everything in your application**. Don't like how an API works? Override it without hacking the core!

Have you ever wanted an swift, agile, RAD framework like RoR, Django, and CodeIgniter. You can have that power inside Joomla! 

See how it works:
=================

*	Joomla 1.6 Weblinks Frontend Component [rewritten in KoJo](http://github.com/raeldc/kojo-klinks)
*	How Nooku's example component was [Rewritten in KoJo](http://github.com/raeldc/kojo-klibrary).


How to Install
==============
*	Get the latest [Joomla 1.6 beta-3 release](http://joomlacode.org/gf/project/joomla/frs/?action=FrsReleaseBrowse&frs_package_id=5276) and install it in your development server.
*	Download and Install the [KoJo Framework Plugin](http://github.com/raeldc/kojo-project/blob/master/packages/plg_kojo.zip). Don't forget to enable the plugin after install.
*	Download and Install the [Joomla 1.6 Weblinks Frontend rewritten in KoJo](http://github.com/raeldc/kojo-klinks). Create a menu item to the component after install.
*	Download and Install [Nooku's example component rewritten in KoJo](http://github.com/raeldc/kojo-project/blob/master/packages/com_klibrary.zip). 

To compare, download the [Nooku Plugin](http://github.com/raeldc/kojo-project/blob/master/packages/plg_koowa.zip) 
and the [com_library](http://github.com/raeldc/kojo-project/blob/master/packages/com_library.zip) example component.

Please note that Nooku Runs on Joomla 1.5 for now.

The Power behind KoJo: [Kohana 3](http://kohanaframework.org/)
==============================================================

Basically, KoJo is a derivative of Kohana so it can run inside Joomla. Kohana 3 is the latest evolution of great frameworks from the past. 
In many ways and more, using Kohana 3 can give you the development boost that popular frameworks like RoR, Django, and CodeIgniter provide.

You might have heard MVC. But Kohana 3 takes it one step further. [Kohana 3 is HMVC(Hierarchical Model View Controller)](http://kerkness.ca/wiki/doku.php?id=hmvc_in_kohana)!

Kohana's Cascading File System and easy to understand class naming convention will blow your mind. It will make you say "why didn't I think of this before?".

Kohana is meant to run alone, so as the project evolves, some parts of Kohana will be rewritten to strip it with unnecessary weight. 
Then some helpers and classes relevant to Joomla will be added.

To know more about Kohana, read the [unofficial wiki](http://kerkness.ca/wiki/doku.php). This is where you can read more about Routes. 

As a summary, understand these 3 things about Kohana, and you'll have the foundation to understand it completely easily:
------------------------------------------------------------------------------------------------------------------------
*	**File System structure and Naming Convention** - all classes in Kohana are located inside /application/classes. 
		Classes are named like this `Directory_SubDirectory_File`. Which means that it's located at `/application/classes/directory/subdirectory/file.php`. 
		There is an auto-loader so you don't have to explicitly include the file that contains the class. In KoJo, the classes are located at `/components/com_yourcomponent/classes`.
*	**Cascading File System** - This one is a little bit complicated at first but once you learn it, it's smooth sailing. CFS gives you the flexibility to override anything that Kohana has without hacking it.
		[Read the explanation here](http://kohanaframework.org/guide/about.filesystem).
*	**Routing and Request** - Everything in Kohana is based on the route. It takes segments from the URI and interprets the segment into parametrs based on a Regex. 
		The Route is passed on the Request, then the Request calls the controller based on the route. More on [Routing here](http://kerkness.ca/wiki/doku.php?id=routing:routing_basics).

The Jelly ORM
-------------
KoJo includes the best ORM available in Kohana - Jelly. [Read more details about Jelly](http://jelly.jonathan-geiger.com/docs/jelly.getting-started).

Development
===========

For now, KoJo is a proof of concept. Further testing is required to give a better view of the pitfalls or repercussions of running Kohana 3 inside Joomla.

If you're interested, just follow project on [GitHub](http://github.com/raeldc/kojo-project) or follow me on [Twitter](http://twitter.com/raeldc). 
If you already know both Joomla and Kohana 3, then maybe you can help me with the development. 
I want to strip Kohana down into something lighter so it leaves little memory footprint inside Joomla.

If you are familiar with Kohana, you know that stripping it down doesn't mean hacking the core. It only means overriding the things we don't need.


Download the latest installable packages [here](http://github.com/raeldc/kojo-project/tree/master/packages/)
==========================================================================================================

Performance
===========

**com_klinks**

	Joomla 1.6 Only: 4.0MB
	After Initializing KoJo: 4.4MB
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

**com_klibrary**

	Joomla 1.6 Only: 4.0MB
	After Initializing KoJo: 4.4MB
	After Displaying the View: 6MB
	Total Memory Usage without Joomla: 2MB
	Total Memory Usage without Joomla and Jelly: 1.3MB
	Total Execution Time: 0.127 seconds
		
**com_library**

	Joomla 1.5 Only: 5.3MB
	Total Memory Usage: 6.7MB
	Initializing Koowa: 5.3MB
	Total Memory Usage without Joomla: 1.4MB
	Total Queries: 13
	Total Execution Time: 0.217 seconds
	
