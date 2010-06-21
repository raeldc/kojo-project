Quick Summary of why KoJo is Good
=================================

*	**Take your code made with KoJo outside Joomla**! This is perhaps the best reason why you would want to use KoJo. Any application you made with KoJo can run stand alone using the Kohana 3 Framework.
*	**Easily Understandable and Consistent API**. Fully compliant with PHP 5.2 Object Oriented Programming.
*	**Runs on Joomla 1.6**. Future proof!	
*	**Create Joomla Components, Modules or Plugins in MVC.**
*	**Override everything in your application**. Don't like how an API works? Override it without hacking the core!
*	**You want more room to implement your own style of programming than doing things a "certain way".**

KoJo's main feature is the easy extendability and overloadability of its core. If you've been a programmer long enough, 
and you realize that you usually end up doing your own solution that's unique to your application, then KoJo might be for you. 

In other frameworks, applying your own solution usually means going out of convention. 
KoJo has minimal conventions and just helps you in implementing your own unique solutions.

If you have complicated requirements and you think that your project will benefit from a fully featured Framework that applies many Design Patterns and Methodologies, then the best framework for you inside Joomla would be Nooku.

Other Features
--------------

*	Bare Minimum Framework which leaves very low memory footprint. Only 400KB on initialization.
*	Highly Modular. Your code is always reusable and redistributable.
*	Simple Class Naming Convention allows you to auto load files and easily search files in the file system.
*	HMVC or Hierarchical Model View Controller allows you to call other applications inside your own.
*	Validation Library. Powerful, extremely flexible and extendable data Validation library. 
*	Granular Caching. Easy to implement Caching with variety of configurations.
*	A Choice of ORM libraries. There are more than 4 ORM libraries for different tastes and needs.
*	Security. Libraries for cleaning up input.
*	Etc. Inflectors, File Upload and Management, Form widgets, HTML helpers, Date helpers, Feed parser
*	[Wide selection of Kohana 3 Libraries](http://github.com/search?langOverride=&q=kohana-&repo=&start_value=1&type=Repositories) and a healthy open source community.


Non-Features
------------
*	No Magic! KoJo is a very explicit framework. You'll know everything that is happening just by looking at the source code 
*	No Magic!! No Magic models that automagically handle states, pagination, ordering, etc. No Magic controllers that automagically handle form submissions. You have to implement your own.
*	No Magic!!! If you like magic, this is not the framework for you. But you can easily implement magics yourself using your own style.
*	There is no template system other than plain PHP/HTML. KoJo eliminates unnecessary overheads as much as possible.

See how it works:
=================

*	Joomla 1.6 Weblinks Frontend Component [rewritten in KoJo](http://github.com/raeldc/kojo-klinks)
*	How Nooku's example component was [Rewritten in KoJo](http://github.com/raeldc/kojo-klibrary).


How to Install
==============
*	Get the latest [Joomla 1.6 beta-3 release](http://joomlacode.org/gf/project/joomla/frs/?action=FrsReleaseBrowse&frs_package_id=5276) and install it in your development server.
*	Download and Install the [KoJo Framework Plugin](http://github.com/raeldc/kojo-project/blob/master/packages/plg_kojo.zip). Don't forget to enable the plugin after install.
*	Download and Install the [Joomla 1.6 Weblinks Frontend rewritten in KoJo](http://github.com/raeldc/kojo-klinks). Create a menu item to the component after install.
*	Download and Install [How Nooku's example component was rewritten in KoJo](http://github.com/raeldc/kojo-project/blob/master/packages/com_klibrary.zip). 

The Power behind KoJo: [Kohana 3](http://kohanaframework.org/)
==============================================================

Basically, KoJo is a derivative of Kohana so it can run inside Joomla. Kohana 3 is the latest evolution of great frameworks from the past. 
In many ways and more, using Kohana 3 can give you the development boost that popular frameworks like RoR, Django, and CodeIgniter provide.

You might have heard MVC. But Kohana 3 takes it one step further. [Kohana 3 is HMVC(Hierarchical Model View Controller)](http://kerkness.ca/wiki/doku.php?id=hmvc_in_kohana)!

Kohana's Cascading File System and easy to understand class naming convention will make working inside the framework easy and modular.

Kohana is meant to run alone, so as the project evolves, some parts of Kohana will be rewritten to strip it with unnecessary weight. 
Then some helpers and classes relevant to Joomla will be added.

To know more about Kohana, read the [unofficial wiki](http://kerkness.ca/wiki/doku.php). 

What's Unique About Kohana and why You would want to use it inside Joomla
-------------------------------------------------------------------------
In the world of programming, many experienced programmers have certain habits that makes them already efficient in what they are doing. 
This makes transitioning to another framework a costly and risky investment.

Many RAD frameworks out there forces you to learn "a certain way" of doing things which, once you've learned that way, it will undoubtedly make your life easier.
These RADFs seem to say **"Forget your habits, forget your style, this is how we want you to do things"**.

This is good for most people, but not for some. Technology evolves so fast that when it's time to move on, you don't wanna be stuck with this "certain way".

What's unqiue about Kohana 3 is that it doesn't force you to learn something entirely new. It accepts developers as they are, and they can leave as they are.
You don't need to unlearn your good habits and coding style, only your bad. But even if you want to leave Kohana, you're not stuck with it, you can take the skills you learned, along with your code somewhere else.

> **There's no end all, be all framework. So Kohana gets out of the developer's way but assists them on things that really matter.**

In the simplest explanation, Kohana is just a class auto-loader with a Cascading File System, a set of Profiling and Debugging tools, and an HMVC Request class that calls a Controller based on a URL.
The Controller then takes charge of everything that's gonna happen. It can call a model, and pass the data to the view.

Everything else in Kohana are Classes that you plug into the system.  Kohana doesn't have a model, it lets you use your own, or use existing ones. 
Kohana doesn't have a template or view, you can use your own. Kohana just provides the most minimal template system ever, which is plain PHP. 

The Kohana package just includes a set of Classes that are simply Libraries that you can use or ignore. You can easily extend these libraries, and you can easily add your own.

I can say that Kohana is like the Linux Kernel. It's a core that facilitates the Request flow and plugging in of Modules. It even facilitates overriding the core without hacking it.

The advantage of having this system is that there are many great libraries out there that are dedicated on what they are doing. 
This means that they are usually better that what do-everything-for-you RAD frameworks can offer.
I want the freedom to choose which libraries I want and I want to use it freely inside my framework. That's what Kohana 3 does for me.

So yup, using Kohana is a step down in comparison to magical, do-everything-for-you framework. 

But Kohana allows you to pick the best libraries available in the open source world, and implement them in your own style.

If there is no magic, then how can it help developers code faster?
------------------------------------------------------------------
Kohana was written with simplicity in mind. It removes unnecessary complexity, and unnecessary overhead. It allows you to code swiftly by being easy to learn. You don't need 1 week to completely grasp its concepts.

Kohana grows with you too. You might be writing your own solutions at first, but after some months of using it, you'll find that you have your own set of libraries which helps you do your thing fast. 

Libraries written for Kohana are usually very simple to use too. Then you can just extend them or strip features away for your own needs.

The best framework is usually the one you understand completely. In Kohana 3, once you grasp the basics, you're up and running in no time.

As a summary, understand these 3 things about Kohana, and you'll have the foundation to understand it completely easily:
------------------------------------------------------------------------------------------------------------------------
*	**File System structure and Naming Convention** - all classes in Kohana are located inside /application/classes. 
Classes are named like this `Directory_SubDirectory_File`. Which means that it's located at `/application/classes/directory/subdirectory/file.php`. 
There is an auto-loader so you don't have to explicitly include the file that contains the class. In KoJo, the classes are located at `/components/com_yourcomponent/classes`. 
Or if you're making a module or plugin for Joomla, it's gonna be here `/modules/mod_yourmodule/classes`. There is a better [explanation of the Kohana 3's naming convention here](http://kohanaframework.org/guide/about.conventions).

*	**Cascading File System** - This one is a little bit complicated at first but once you learn it, it's smooth sailing. CFS gives you the flexibility to override anything that Kohana has without hacking it.
[Read the explanation here](http://kohanaframework.org/guide/about.filesystem).

*	**Routing and the HMVC Request** - HMVC or Hierarchical Model View Controller is the next evolution of MVC. It allows you to make your web applications more manageable and scalable. Visit the following links to learn more:
[Understand HMVC in Kohana 3](http://kerkness.ca/wiki/doku.php?id=hmvc_in_kohana). [Benefits of HMVC](http://techportal.ibuildings.com/2010/02/22/scaling-web-applications-with-hmvc/). Kohana 3 stand alone depends on Routes to issue request. 
Here's a [tutorial of how routes in Kohana 3 work](http://kohanaframework.org/guide/tutorials.urls). In KoJo, the parameters for the Request are passed through Joomla's url parameters so the Request doesn't need a Route.

The ORM
-------------
KoJo includes the best ORM available in Kohana - Jelly. [Read more details about Jelly](http://jelly.jonathan-geiger.com/docs/jelly.getting-started). There are many great ORM libraries in Kohana 3 that serves different needs.
Jelly is fat and heavy but it is feature rich and very flexible.

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
