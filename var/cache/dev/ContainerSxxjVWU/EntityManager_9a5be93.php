<?php

namespace ContainerSxxjVWU;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d520 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9c721 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1926d = [
        
    ];

    public function getConnection()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getConnection', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getMetadataFactory', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getExpressionBuilder', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'beginTransaction', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getCache', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'transactional', array('func' => $func), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'commit', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->commit();
    }

    public function rollback()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'rollback', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getClassMetadata', array('className' => $className), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'createQuery', array('dql' => $dql), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'createNamedQuery', array('name' => $name), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'createQueryBuilder', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'flush', array('entity' => $entity), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'clear', array('entityName' => $entityName), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->clear($entityName);
    }

    public function close()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'close', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->close();
    }

    public function persist($entity)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'persist', array('entity' => $entity), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'remove', array('entity' => $entity), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'refresh', array('entity' => $entity), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'detach', array('entity' => $entity), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'merge', array('entity' => $entity), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'contains', array('entity' => $entity), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getEventManager', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getConfiguration', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'isOpen', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getUnitOfWork', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getProxyFactory', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'initializeObject', array('obj' => $obj), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'getFilters', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'isFiltersStateClean', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'hasFilters', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return $this->valueHolder7d520->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer9c721 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7d520) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d520 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d520->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, '__get', ['name' => $name], $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        if (isset(self::$publicProperties1926d[$name])) {
            return $this->valueHolder7d520->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d520;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d520;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d520;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d520;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, '__isset', array('name' => $name), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d520;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d520;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, '__unset', array('name' => $name), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d520;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d520;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, '__clone', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        $this->valueHolder7d520 = clone $this->valueHolder7d520;
    }

    public function __sleep()
    {
        $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, '__sleep', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;

        return array('valueHolder7d520');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9c721 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9c721;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9c721 && ($this->initializer9c721->__invoke($valueHolder7d520, $this, 'initializeProxy', array(), $this->initializer9c721) || 1) && $this->valueHolder7d520 = $valueHolder7d520;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d520;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d520;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
