A Symfony 2 bundle for providing Revive repositories.

#Installation

**Composer** 

Add the bundle to composer.json
```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/vortexgin/symfony-revive"
        }
    ],
    "require": {
        "vortexgin/symfony-revive": "^1.0"
    }
}

``` 

Update Composer dependency:
```
composer update
```

**Register the bundle**

```
<?php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Vortexgin\ReviveBundle\VortexginReviveBundle(),
    );
    // ...
}
```

#Configuration 

**Doctrine**

This bundle requrie database connection. Make sure you have Doctrine configurated properly.

```
#app/config/parameters.yml
parameters:
    database_driver:   pdo_mysql
    database_host:     127.0.0.1
    database_port:     ~
    database_name:     my_revive_db
    database_user:     user
    database_password: pass
```

**config.yml**

The following configuration is optional.
```
#app/config/config.yml
vortexgin_revive:
    doctrine:
        entity_manager: 'revive'
        table_prefix: 'ox_'
```


#Usage
An example to obtain active zones:
```
<?php
$assocManager = $this->container->get('vortexgin.manager.revive.adzoneassoc');
$bannerManager = $this->container->get('vortexgin.manager.revive.banners');
$zoneManager = $this->container->get('vortexgin.manager.revive.zones'); 

$activeZones = $assocManager->findActiveZones();
$zones = array();
if(count($activeZones) > 0){
    foreach ($activeZones as $activeZone) {
        $banner = $bannerManager->find($activeZone->getBanner()->getId());
        $zone = $zoneManager->find($activeZone->getZone()->getId());
        $zones[$activeZone->getZone()->getId()] = array(
            'zone' => $zoneManager->serialize($zone),
            'banner' => $bannerManager->serialize($banner),
        );
    }
}
//...
```