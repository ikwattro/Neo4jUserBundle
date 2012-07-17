# Neo4j User Bundle

This bundle adds extension for Neo4j to the FOS User Bundle.

## Installation

Installation is a quick three-steps process :

#### Add the bundle to your dependencies in the `composer.json` file :

````
"require":
    "kwattro/neo4j-user-bundle": "*"
````

#### Register the bundles into your `AppKernel.php` :

````
new FOS\UserBundle\FOSUserBundle(),
new Kwattro\Neo4j\UserBundle\KwattroNeo4jUserBundle(),
````

#### Create your User graph entity

