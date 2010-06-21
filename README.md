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

and the [com_library](http://github.com/raeldc/kojo-project/blob/master/packages/com_library.zip) example component.


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

Why I Love Kohana 3
-------------------

In the world of programming, many experienced programmers have certain habits that makes them already efficient in what they are doing. 
This makes transitioning to another framework a costly and risky investment.

Many RAD frameworks out there forces you to learn "a certain way" of doing things which, once you've learned that way, it will undoubtedly make your life easier.
These RADFs seem to say **"Forget your habits, forget your style, this is how we want you to do things"**.
This is good for most people, but not for some like me. Technology evolves so fast that when it's time to move on, I don't wanna be stuck with this "certain way".

What I love about Kohana 3 is that it doesn't force you to learn something entirely new. It accepts developers as they are, and they can leave as they are.
You don't need to unlearn your good habits and coding style, only your bad. But even if you want to leave Kohana, you're not stuck with it, you can take the skills you learned, along with your code somewhere else.
**Kohana gets out of the developer's way but assists them on things that really matter.**

> **In the simplest explanation, Kohana is just a class auto-loader with a Cascading File System, a set of Profiling and Debugging tools, and an HMVC Request class that calls a Controller based on a URL.**

The Controller then takes charge of everything that's gonna happen. It can call a model, and pass the data to the view.

Everything else in Kohana are Classes that you plug into the system.  Kohana doesn't have a model, it lets you use your own, or use existing ones. 
Kohana doesn't have a template or view, you can use your own. Kohana just provides the most minimal template system ever, which is plain PHP. 

The Kohana package just includes a set of Classes that are simply Libraries that you can use or ignore. You can easily extend these libraries, and you can easily add your own.

I can say that Kohana is like the Linux Kernel. It's a core that facilitates the Request flow and plugging in of Modules. It even facilitates overriding the core without hacking it.

The advantage of having this system is that there are many great libraries out there that are dedicated on what they are doing. 
This means that they are usually better that what do-everything-for-you RAD frameworks can offer.
I want the freedom to choose which libraries I want and I want to use it freely inside my framework. That's what Kohana 3 does for me.

So yup, using Kohana is a step down in comparison to magical, do-everything-for-you framework. 
But I bet that the libraries I can use inside Kohana are steps ahead of what other do-everything-for-you frameworks offer.

The Jelly ORM
-------------
KoJo includes the best ORM available in Kohana - Jelly. [Read more details about Jelly](http://jelly.jonathan-geiger.com/docs/jelly.getting-started).

Development
===========

For now, KoJo is a proof of concept. Further testing is required to give a better idea of the pitfalls and repercussions of running Kohana 3 inside Joomla.

If you're interested, just follow this project on [GitHub](http://github.com/raeldc/kojo-project) or follow me on [Twitter](http://twitter.com/raeldc). 
If you already know both Joomla and Kohana 3, then maybe you can help me with the development. 
I want to strip Kohana down into something lighter so it leaves little memory footprint inside Joomla.

If you are familiar with Kohana, you know that stripping it down doesn't mean hacking the core. It only means overriding the things we don't need.


Download the latest installable packages [here](http://github.com/raeldc/kojo-project/tree/master/packages/)
------------------------------------------------------------------------------------------------------------

Performance Summary
===================

Does Joomla take a performance hit when it runs a component written in KoJo? A little bit. Compared to Nooku, KoJo is heavier by 600kb. But once the code is optimized, and uses a simpler ORM instead of Jelly, I think it can even become lighter.

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

	Total Memory Usage with Joomla: 6MB
	Joomla 1.6 Only: 4.0MB
	After Initializing KoJo: 4.45MB
	Total Memory Usage without Joomla: 2MB
	Total Memory Usage without Joomla and Jelly: 1.3MB
	Total Execution Time: 0.127 seconds
