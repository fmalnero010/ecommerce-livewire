<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1747530816,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.16',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80406,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigGetDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [/var/www/html/vendor/larastan/larastan/bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkModelAppends: true, generalizeEnvReturnType: false, checkConfigTypes: false, level: 10, paths: [/var/www/html/app, /var/www/html/tests/Feature, /var/www/html/tests/Unit], checkUnionTypes: true, inferPrivatePropertyTypeFromConstructor: true, checkExplicitMixed: true, excludePaths: {analyseAndScan: [/var/www/html/vendor, /var/www/html/storage, /var/www/html/bootstrap/cache], analyse: []}, scanFiles: [/var/www/html/bootstrap/app.php], tmpDir: /var/www/html/storage/framework/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigGetDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/html/app',
    1 => '/var/www/html/tests/Feature',
    2 => '/var/www/html/tests/Unit',
  ),
  'scannedFiles' => 
  array (
    '/var/www/html/bootstrap/app.php' => 'ccc1e776e0750606fdd4174538627e05c9527811',
  ),
  'composerLocks' => 
  array (
    '/var/www/html/composer.lock' => '713d9398d2a568bd0f48677e1b9a523ee6e4132d',
  ),
  'composerInstalled' => 
  array (
    '/var/www/html/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.8.3',
          'version' => '7.8.3.0',
          'reference' => 'a585c346ddf1bec22e51e20b5387607905604a71',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.12.3',
          'version' => '0.12.3.0',
          'reference' => '866551da34e9a618e64a819ee1e01c20d8a588ba',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.5',
          'version' => '1.1.5.0',
          'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '5817d0659c5b50c9b950feb9af7b9668e2c436bc',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '8c784d071debd117328803d86b2097615b457500',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => '8520451a140d3f46ac33042715115e290cf5785f',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.0',
          'version' => '2.18.0.0',
          'reference' => 'a7de6c3c6c3c022f5cfc337f8ede6a14460cf77e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.9.3',
          'version' => '7.9.3.0',
          'reference' => '7b2f29fe81dc4da0ca0ea7d42107a0845946ea77',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '7c69f28996b0a6920945dd20b3857e499d9ca96c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.7.1',
          'version' => '2.7.1.0',
          'reference' => 'c2270caaabe631b3b44c85f99e5a04bbb8060d16',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.4',
          'version' => '1.0.4.0',
          'reference' => '30e286560c137526eccd4ce21b2de477ab0676d2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.10.2',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '1042fa0c2ee490bb6da7381f3323f7292ad68222',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/html/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.10.2',
          'version' => '12.10.2.0',
          'reference' => '0f123cc857bc177abe4d417448d4f7164f71802a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.2',
          'version' => '1.2.2.0',
          'reference' => 'f31f4980f52be17c4667f3eafe034e6826787db2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.22.0',
          'version' => '1.22.0.0',
          'reference' => '7ddfaa6523a675fae5c4123ee38fc6bfb8ee4f36',
          'type' => 'project',
          'install_path' => '/var/www/html/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.5',
          'version' => '0.3.5.0',
          'reference' => '57b8f7efe40333cdb925700891c7d7465325d3b1',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.42.0',
          'version' => '1.42.0.0',
          'reference' => '2edaaf77f3c07a4099965bb3d7dfee16e801c0f6',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b352cf0534aa1ae6b4d825d1e762e35d43f8a841',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.1',
          'version' => '2.10.1.0',
          'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.6.2',
          'version' => '2.6.2.0',
          'reference' => '06c3b0bf2540338094575612f4a1778d0d2d5e94',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.29.1',
          'version' => '3.29.1.0',
          'reference' => 'edc1bb7c86fab0776c3287dbd19b5fa278347319',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.29.0',
          'version' => '3.29.0.0',
          'reference' => 'e0e8d52ce4b2ed154148453d321e97c8e931bd27',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.5.1',
          'version' => '7.5.1.0',
          'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.5.0',
          'version' => '7.5.0.0',
          'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/flux' => 
        array (
          'pretty_version' => 'v2.1.5',
          'version' => '2.1.5.0',
          'reference' => 'e24f05be20fa1a0ca027a11c2eea763cc539c82e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../livewire/flux',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v3.6.3',
          'version' => '3.6.3.0',
          'reference' => '56aa1bb63a46e06181c56fa64717a7287e19115e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/volt' => 
        array (
          'pretty_version' => 'v1.7.1',
          'version' => '1.7.1.0',
          'reference' => 'ba3e609fd4c71f8b5783f024baf51715e48e93a6',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../livewire/volt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.0',
          'version' => '1.13.0.0',
          'reference' => '024473a478be9df5fdaca2c793f2232fe788e414',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '6d16a8a015166fe54e22c042e0805c5363aef50d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.2',
          'version' => '1.3.2.0',
          'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ce708655043c7050eb050df361c5e313cf708309',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.4.0',
          'version' => '5.4.0.0',
          'reference' => '447a020a1f875a434d62f2a401f53b82a396e494',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.0',
          'version' => '8.8.0.0',
          'reference' => '4cf9f3b47afff38b139fb79ce54fc71799022ce8',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '52915afe6a1044e8b9cee1bcff836fb63acf9cda',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v3.8.2',
          'version' => '3.8.2.0',
          'reference' => 'c6244a8712968dbac88eb998e7ff3b5caa556b0d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'e79b26c65bc11c41093b10150c1341cc5cdbea83',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'db7bd9cb1612b223e16618d85475c6f63b9c8daa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '6801be82fd92b96e82dd72e563e5674b1ce365fc',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v3.0.5',
          'version' => '3.0.5.0',
          'reference' => 'e10dbdc98c9e2f3890095b4fe2144f63a5717e08',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.2',
          'version' => '5.6.2.0',
          'reference' => '92dde6a5919e34835c506ac8c523ef095a95ed62',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.10.0',
          'version' => '1.10.0.0',
          'reference' => '679e3ce485b99e84c775d28e2e96fade9a7fb50a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.3',
          'version' => '1.9.3.0',
          'reference' => 'e3fac8b24f56113f7cb96af14958c0dd16330f54',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '9b30d6fd026b2c132b3985ce6b23bec09ab3aa68',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.16',
          'version' => '2.1.16.0',
          'reference' => 'b8c1cf533cba0c305d91c6ccd23f3dd0566ba5f9',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.9',
          'version' => '11.0.9.0',
          'reference' => '14d63fbcca18457e49c6f8bebaa91a87e8e188d7',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.15',
          'version' => '11.5.15.0',
          'reference' => '4b6a4ee654e5e0c5e1f17e2f83c0f4c91dee1f9c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.8',
          'version' => '0.12.8.0',
          'reference' => '85057ceedee50c49d4f6ecaff73ee96adb3b3625',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.6',
          'version' => '4.7.6.0',
          'reference' => '91039bc1faa45ba123c4328958e620d382ec7088',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.6',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.1',
          'version' => '6.3.1.0',
          'reference' => '24b8fbc2c8e201bb1308e7b05148d6ab393b6959',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.0',
          'version' => '7.2.0.0',
          'reference' => '855f3ae0ab316bbafe1ba4e16e9f3c078d24a0c5',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.0',
          'version' => '6.3.0.0',
          'reference' => '3473f61172093b2da7de1fb5782e1f24cc036dc3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '694d156164372abbd149a4b85ccda2e4670c0e16',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.2',
          'version' => '5.1.2.0',
          'reference' => 'a8a7e30534b0eb0c77cd9d07e82de1a114389f5e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => 'e51498ea18570c062e7df29d05a7003585b19b88',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '74c71c939a79f7d5bf3c1ce9f5ea37ba0114c6f6',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '102be5e6a8e4f4f3eb3149bcbfa33a80d1ee374b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '910c5db85a5356d0fea57680defec4e99eb9c8c1',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '7642f5e970b672283b7823222ae8ef8bbc160b9f',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.2.2',
          'version' => '7.2.2.0',
          'reference' => '87a71856f2f56e4100373e92529eed3171695cfb',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '371272aeb6286f8135e028ca535f8e4d6f114126',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => 'b1fe91bc1fa454a806d3f98db4ba826eb9941a54',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'f3871b182c44997cf039f3b462af4a48fb85f9d3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '87ca22046b78c3feaff04b337f33b38510fd686b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'c36586dcf89a12315939e00ec9b4474adcb1d773',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '2fb86d65e2d424369ad2905e83b236a8805ba491',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '87b7c93e57df9d8e39a093d32587702380ff045d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'ee9a67edc6baa33e5fae662f94f91fd262930996',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => 'e53260aabf78fb3d63f8d79d69ece59f80d5eda0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '446e0d146f991dde3e73f45f2c97a9faad773c82',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '283856e6981286cc0d800b53bd5703e8e363f05a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '4667ff3bd513750603a09c8dedbea942487fb07c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '2d294d0c48df244c71c105a169d0190bfb080426',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => '82b478c69745d8878eb60f9a049a4d584996f73a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '4c4b6f4cfcd7e52053f0c8bfad0f7f30fb924912',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.5',
          'version' => '0.8.5.0',
          'reference' => 'cf6fb197b676ba716837c886baca842e4db29005',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.1',
          'version' => '5.6.1.0',
          'reference' => 'a59a13791077fe3d44f90e7133eb68e7d22eaff2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/var/www/html/vendor/larastan/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'calendar',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dom',
    14 => 'exif',
    15 => 'fileinfo',
    16 => 'filter',
    17 => 'ftp',
    18 => 'gd',
    19 => 'gettext',
    20 => 'hash',
    21 => 'iconv',
    22 => 'igbinary',
    23 => 'imagick',
    24 => 'imap',
    25 => 'intl',
    26 => 'json',
    27 => 'ldap',
    28 => 'libxml',
    29 => 'mbstring',
    30 => 'memcached',
    31 => 'mongodb',
    32 => 'msgpack',
    33 => 'mysqli',
    34 => 'mysqlnd',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcov',
    38 => 'pcre',
    39 => 'pdo_mysql',
    40 => 'pdo_pgsql',
    41 => 'pdo_sqlite',
    42 => 'pgsql',
    43 => 'posix',
    44 => 'random',
    45 => 'readline',
    46 => 'redis',
    47 => 'session',
    48 => 'shmop',
    49 => 'soap',
    50 => 'sockets',
    51 => 'sodium',
    52 => 'sqlite3',
    53 => 'standard',
    54 => 'swoole',
    55 => 'sysvmsg',
    56 => 'sysvsem',
    57 => 'sysvshm',
    58 => 'tokenizer',
    59 => 'xml',
    60 => 'xmlreader',
    61 => 'xmlwriter',
    62 => 'xsl',
    63 => 'zip',
    64 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '10',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|null.',
       'file' => '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method markEmailAsVerified() on App\\Models\\User|null.',
       'file' => '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/app/Livewire/Actions/Logout.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Livewire\\Actions\\Logout::__invoke() has no return type specified.',
       'file' => '/var/www/html/app/Livewire/Actions/Logout.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/app/Livewire/Actions/Logout.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/Auth/AuthenticationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertAuthenticated().',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertGuest().',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method post() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertGuest().',
       'file' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$id.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>|null.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 34,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$id.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>|null.',
       'file' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/Auth/PasswordResetTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 34,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Binary operation "." between \'/reset-password/\' and mixed results in an error.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
       'identifier' => 'binaryOp.invalid',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $token on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 52,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $token on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 62,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 62,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/Auth/RegistrationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertAuthenticated().',
       'file' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/DashboardTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/DashboardTest.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/DashboardTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/DashboardTest.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/DashboardTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/DashboardTest.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/DashboardTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/DashboardTest.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/DashboardTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/DashboardTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/DashboardTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/ExampleTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/ExampleTest.php',
       'line' => 4,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/ExampleTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 4,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/var/www/html/tests/Feature/ExampleTest.php',
       'line' => 6,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/ExampleTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::refresh().',
       'file' => '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertOk() on mixed.',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::refresh().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$name.',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email_verified_at.',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::$email.',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method App\\Models\\User|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\User>::refresh().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'line' => 68,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 68,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 25,
      ),
    ),
  ),
  '/var/www/html/app/Livewire/Actions/Logout.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Session',
        1 => 'invalidate',
        2 => 17,
      ),
    ),
  ),
  '/var/www/html/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  '/var/www/html/tests/Feature/Auth/AuthenticationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 6,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 8,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 14,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 29,
      ),
      4 => 
      array (
        0 => 'test',
        1 => 42,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 8,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 10,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 18,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 37,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 33,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeFalse',
        2 => 48,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'fake',
        2 => 21,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 6,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 8,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 16,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 30,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/Auth/PasswordResetTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 8,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 10,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 16,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 28,
      ),
      4 => 
      array (
        0 => 'test',
        1 => 46,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Notification',
        1 => 'fake',
        2 => 17,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Notification',
        1 => 'fake',
        2 => 29,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Notification',
        1 => 'fake',
        2 => 47,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/Auth/RegistrationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 5,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 7,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 13,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/DashboardTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 6,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 8,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 13,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/ExampleTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'it',
        1 => 3,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 7,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 9,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 27,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 24,
      ),
    ),
  ),
  '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'uses',
        1 => 6,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 8,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 14,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 33,
      ),
      4 => 
      array (
        0 => 'test',
        1 => 48,
      ),
      5 => 
      array (
        0 => 'test',
        1 => 65,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toEqual',
        2 => 28,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toEqual',
        2 => 29,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeNull',
        2 => 30,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeNull',
        2 => 45,
      ),
      4 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeNull',
        2 => 61,
      ),
      5 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeFalse',
        2 => 62,
      ),
      6 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeNull',
        2 => 76,
      ),
    ),
  ),
  '/var/www/html/tests/Unit/ExampleTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 3,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 4,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    'fileHash' => '05d712c6d9f692c553ceb0c04dcdf34ab65d6d91',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php',
    ),
  ),
  '/var/www/html/app/Livewire/Actions/Logout.php' => 
  array (
    'fileHash' => 'c23deb662e98fca0af0791b97dcedb39f0b60ce2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/app/Models/User.php' => 
  array (
    'fileHash' => '86e94bda35e453e9ce5d5c71c1eafdc52429cf85',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php',
      1 => '/var/www/html/tests/Feature/Auth/AuthenticationTest.php',
      2 => '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php',
      3 => '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php',
      4 => '/var/www/html/tests/Feature/Auth/PasswordResetTest.php',
      5 => '/var/www/html/tests/Feature/DashboardTest.php',
      6 => '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php',
      7 => '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php',
    ),
  ),
  '/var/www/html/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '01bf9e5cf5bb666446625056b618445ae4749675',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/app/Providers/VoltServiceProvider.php' => 
  array (
    'fileHash' => '0d0bf85e1bb1544d1d10558972fc8126ef72b5b1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/Auth/AuthenticationTest.php' => 
  array (
    'fileHash' => '0bd89a3c2cb7886872365bd81337567449ec64d4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/Auth/EmailVerificationTest.php' => 
  array (
    'fileHash' => '26510f333323817948e9ca2d71d203c8ace2c927',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/Auth/PasswordConfirmationTest.php' => 
  array (
    'fileHash' => '76b2efcb35093a29a480f5fdf4be7649bd68f425',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/Auth/PasswordResetTest.php' => 
  array (
    'fileHash' => '9591103b10fe1896e0ec1fd7a4fdc5a09122c2a7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/Auth/RegistrationTest.php' => 
  array (
    'fileHash' => '2c9145d8086618390820860cc98bd53a4c292e55',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/DashboardTest.php' => 
  array (
    'fileHash' => '294ed63d20ca2c40e57c8a699d9197593e1d036a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/ExampleTest.php' => 
  array (
    'fileHash' => '29d016ef9395c65d72901dde82eb43f16df04764',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/Settings/PasswordUpdateTest.php' => 
  array (
    'fileHash' => 'a33a92fbf6d55589540a0c80a34c9f5362612c5d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Feature/Settings/ProfileUpdateTest.php' => 
  array (
    'fileHash' => '374dcf4efd17fa75feff056b37f0960d0851c63d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/tests/Unit/ExampleTest.php' => 
  array (
    'fileHash' => 'f6d938489793d83c24084962e31d194e181ac80f',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/var/www/html/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the authenticated user\'s email address as verified.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'verified' => 'Illuminate\\Auth\\Events\\Verified',
              'emailverificationrequest' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/app/Livewire/Actions/Logout.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Actions\\Logout',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Log the current user out of the application.
     */',
             'namespace' => 'App\\Livewire\\Actions',
             'uses' => 
            array (
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'session' => 'Illuminate\\Support\\Facades\\Session',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'initials',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the user\'s initials
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/app/Providers/VoltServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\VoltServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'volt' => 'Livewire\\Volt\\Volt',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'volt' => 'Livewire\\Volt\\Volt',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
