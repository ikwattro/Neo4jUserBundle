## Neo4j User Bundle

This bundle adds the possibility to use the [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) with the users provided from a [Neo4j](http://neo4j.org) Graph DB.

### Purpose

The bundle adds a custom storage layer to the FOSUserBundle for Neo4j and provides such a Security Provider for Symfony.

### Installation

#### Adds the `Neo4j User Bundle` to your packages requirements :

````
{
	"require":{
	    ...,
	    "kwattro/neo4j-user-bundle": "*"
	}
}
````

#### Add the FOSUserBundle and KwattroNeo4jUserBundle to your *AppKernel.php* :

````
public function registerBundles()
    {
        $bundles = array(
        	...,
            new FOS\UserBundle\FOSUserBundle(),
            new Kwattro\Neo4j\UserBundle\KwattroNeo4jUserBundle(),
        );
````

#### Create your User Class

Your Custom User class must extends the Neo4j User Model

````
//Acme/DemoBundle/Entity/User.php
<?php
namespace Acme\DemoBundle\Entity;

use HireVoice\Neo4j\Annotation as OGM;
use Doctrine\Common\Collections\ArrayCollection;
use Kwattro\Neo4j\UserBundle\Node\User as BaseUser;

/**
 * All entity classes must be declared as such.
 *
 * @OGM\Entity
 */
class User extends BaseUser
{
    /**
     * The internal node ID from Neo4j must be stored. Thus an Auto field is required
     * @OGM\Auto
     */
    protected $id;
}
````

#### Configure the FOSUserBundle as you would normally do but specify the custom storage layer :

````
// app/config/config.yml
fos_user:
    db_driver: custom
    user_class: Acme\DemoBundle\Entity\User
    service:
        user_manager: kwattro_neo4j_user.manager
    firewall_name: main
````

#### Configure your security configuration 

Configure it in accordance with the FOSUserBundle documentation, the only change is that you need to specify the security provider with the one provided by the Neo4jUserBundle

````
security:
    providers:
        fos_userbundle:
            id: kwattro_neo4j_user.user_provider.username
````

#### Routes

Adds the routes in accordance with the FOSUserBundle documentation at [Step6](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md#step-6-import-fosuserbundle-routing-files)



