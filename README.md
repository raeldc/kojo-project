Quick Summary of why KoJo is Good
=================================

*	**It's very easy to learn**
*	**Consistent API**. Fully compliant with PHP 5 Object Oriented Programming
*	**Allows you to write less code**. You've heard this cliche many times, but you can [Compare it with Nooku](http://github.com/raeldc/kojo-klibrary/blob/master/README.md).
*	**Runs on Joomla 1.6**. Future proof!	
*	**Take your skills with KoJo outside Joomla**! KoJo is based on a mature, stable, and highly acclaimed PHP Framework.
*	**No restrictive naming conventions**. Class naming convention is the most practical you'll ever see.
*	**Override everything in your application**. Don't like how an API works? Override it without hacking the core!

KoJo is inspired by the best and powerful ideas from RoR, Django, and CodeIgniter. Now you can have that power inside Joomla! 

See how it works:
=================

[Joomla 1.6 Weblinks Frontend Component rewritten in KoJo](http://github.com/raeldc/kojo-klinks)
------------------------------------------------------------------------------------------------

[Nooku's example component rewritten in KoJo](http://github.com/raeldc/kojo-klibrary/blob/master/README.md).
------------------------------------------------------------------------------------------------------------

How to Install
==============
*	Get the latest [Joomla 1.6 beta-3 release](http://joomlacode.org/gf/project/joomla/frs/?action=FrsReleaseBrowse&frs_package_id=5276)
*	Download and Install the KoJo Framwork Plugin


The Power behind KoJo: [Kohana 3](http://kohanaframework.org/)
==============================================================

Kohana 3 is the latest evolution of great frameworks from the past. It gets the best ideas from RoR, Django, CodeIgniter, etc, packaged in a lean

Basically, KoJo is a derivative of Kohana so it can run inside Joomla. As the project evolves, some parts of Kohana will be rewritten to strip it with unnecessary weight.


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
	
