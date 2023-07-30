<?php

namespace Container4TvKArC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class Emn_CodeChallenge_Infrastructure_Symfony_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\AnnouncersController' => 'getAnnouncersControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BaseController' => 'getBaseControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BrandController' => 'getBrandControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CategoriesController' => 'getCategoriesControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CitiesController' => 'getCitiesControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\IabCategoriesController' => 'getIabCategoriesControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\LabelsController' => 'getLabelsControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController' => 'getMultiOffersControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\NewslettersController' => 'getNewslettersControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController' => 'getOfferNewsletterControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersAddedController' => 'getOffersAddedControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersController' => 'getOffersControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddController' => 'getOffersToAddControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddFilterController' => 'getOffersToAddFilterControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\ProvidersController' => 'getProvidersControllerService',
            'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\SiteController' => 'getSiteControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command.public_alias.Emn\\CodeChallenge\\Infrastructure\\Command\\OfferViewsCommand' => 'getOfferViewsCommandService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'test.client' => 'getTest_ClientService',
            'test.private_services_locator' => 'getTest_PrivateServicesLocatorService',
            'test.service_container' => 'getTest_ServiceContainerService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/event-dispatcher/src/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractTestSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/TestSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\AnnouncersController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\AnnouncersController
     */
    protected function getAnnouncersControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/AnnouncersController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\AnnouncersController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\AnnouncersController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Announcer\\FindAnnouncers'] ?? $this->getFindAnnouncersService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\Announcer\\GetAnnouncers'] ?? $this->getGetAnnouncersService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\AnnouncersController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\BaseController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\BaseController
     */
    protected function getBaseControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BaseController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\BaseController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BaseController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\BrandController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\BrandController
     */
    protected function getBrandControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BrandController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BrandController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\BrandController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Brand\\FindBrands'] ?? $this->getFindBrandsService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\Brand\\GetBrands'] ?? $this->getGetBrandsService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BrandController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\CategoriesController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\CategoriesController
     */
    protected function getCategoriesControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/CategoriesController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CategoriesController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\CategoriesController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Categories\\FindCategories'] ?? $this->getFindCategoriesService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CategoriesController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\CitiesController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\CitiesController
     */
    protected function getCitiesControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/CitiesController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CitiesController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\CitiesController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Cities\\FindCities'] ?? $this->getFindCitiesService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CitiesController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\IabCategoriesController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\IabCategoriesController
     */
    protected function getIabCategoriesControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/IabCategoriesController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\IabCategoriesController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\IabCategoriesController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\IabCategories\\GetIabCategories'] ?? $this->getGetIabCategoriesService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\IabCategoriesController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\LabelsController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\LabelsController
     */
    protected function getLabelsControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/LabelsController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\LabelsController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\LabelsController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Labels\\FindLabels'] ?? $this->getFindLabelsService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\LabelsController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\MultiOffersController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\MultiOffersController
     */
    protected function getMultiOffersControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/MultiOffersController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\MultiOffersController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateMultiOffers'] ?? $this->getCreateMultiOffersService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\UpdateMultiOffers'] ?? $this->getUpdateMultiOffersService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetOfferNewsletter'] ?? $this->getGetOfferNewsletterService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetMultiOffer'] ?? $this->getGetMultiOfferService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateRelation'] ?? $this->getCreateRelationService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\NewslettersController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\NewslettersController
     */
    protected function getNewslettersControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/NewslettersController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\NewslettersController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\NewslettersController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Newsletters\\UpdateNewsletters'] ?? $this->getUpdateNewslettersService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\Newsletters\\GetNewsletter'] ?? $this->getGetNewsletterService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\NewslettersController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\OfferNewsletterController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\OfferNewsletterController
     */
    protected function getOfferNewsletterControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/OfferNewsletterController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\OfferNewsletterController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\CreateOfferNewsletter'] ?? $this->getCreateOfferNewsletterService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\DeleteOfferNewsletter'] ?? $this->getDeleteOfferNewsletterService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\UpdateOfferNewsletter'] ?? $this->getUpdateOfferNewsletterService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\OffersAddedController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\OffersAddedController
     */
    protected function getOffersAddedControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/OffersAddedController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersAddedController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\OffersAddedController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\OffersAdded\\GetOffersAdded'] ?? $this->getGetOffersAddedService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersAddedController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\OffersController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\OffersController
     */
    protected function getOffersControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/OffersController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\OffersController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Offers\\GetOffers'] ?? $this->getGetOffersService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\Offers\\DuplicateOffer'] ?? $this->getDuplicateOfferService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\Offers\\DeleteOffers'] ?? $this->getDeleteOffersService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\OffersToAddController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\OffersToAddController
     */
    protected function getOffersToAddControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/OffersToAddController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\OffersToAddController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\GetOffersToAdd'] ?? $this->getGetOffersToAddService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\OffersToAddFilterController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\OffersToAddFilterController
     */
    protected function getOffersToAddFilterControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/OffersToAddFilterController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddFilterController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\OffersToAddFilterController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\FilterOffersToAdd'] ?? $this->getFilterOffersToAddService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddFilterController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\ProvidersController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\ProvidersController
     */
    protected function getProvidersControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/ProvidersController.php';

        $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\ProvidersController'] = $instance = new \CodeChallenge\Infrastructure\Http\Controller\ProvidersController(($this->privates['Emn\\CodeChallenge\\Application\\Service\\Providers\\FindProviders'] ?? $this->getFindProvidersService()), ($this->privates['Emn\\CodeChallenge\\Application\\Service\\Providers\\GetProviders'] ?? $this->getGetProvidersService()));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\ProvidersController', $this));

        return $instance;
    }

    /*
     * Gets the public 'CodeChallenge\Infrastructure\Http\Controller\SiteController' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Http\Controller\SiteController
     */
    protected function getSiteControllerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Http/Controller/SiteController.php';

        return $this->services['Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\SiteController'] = new \CodeChallenge\Infrastructure\Http\Controller\SiteController();
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(NULL);
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('buWWPE9a7y', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /*
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())]);
    }

    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService())]);
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('JoNls+N1cT', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService())]);
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 1 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 2 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
        }, 3), false, ($this->targetDir.''.'/Emn_CodeChallenge_Infrastructure_Symfony_KernelProdContainerDeprecations.log'));
    }

    /*
     * Gets the public 'console.command.public_alias.CodeChallenge\Infrastructure\Command\OfferViewsCommand' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Command\OfferViewsCommand
     */
    protected function getOfferViewsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Command/OfferViewsCommand.php';

        return $this->services['console.command.public_alias.Emn\\CodeChallenge\\Infrastructure\\Command\\OfferViewsCommand'] = new \CodeChallenge\Infrastructure\Command\OfferViewsCommand(($this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferView\\LoadOfferViews'] ?? $this->getLoadOfferViewsService()));
    }

    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
        ], [
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command']);
    }

    /*
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';

        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';

        return $this->services['doctrine.dbal.default_connection'] = ($this->privates['doctrine.dbal.connection_factory'] ?? $this->getDoctrine_Dbal_ConnectionFactoryService())->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '8', 'defaultTableOptions' => []], ($this->privates['doctrine.dbal.default_connection.configuration'] ?? ($this->privates['doctrine.dbal.default_connection.configuration'] = new \Doctrine\DBAL\Configuration())), ($this->privates['doctrine.dbal.default_connection.event_manager'] ?? $this->getDoctrine_Dbal_DefaultConnection_EventManagerService()), ['enum' => 'string']);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->privates['doctrine.orm.default_configuration'] ?? $this->getDoctrine_Orm_DefaultConfigurationService()));

        ($this->privates['doctrine.orm.default_manager_configurator'] ?? ($this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], [])))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ErrorController.php';

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelRequest'], 192);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['argument_resolver'] ?? $this->getArgumentResolverService()));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['routing.resolver'] ?? $this->getRouting_ResolverService()), ['utf8' => true]);
    }

    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($this->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($this->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (false) {
                yield 'debug.stopwatch' => null;
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (isset($this->privates['cache.annotations'])) + (int) (false) + (int) (isset($this->privates['doctrine.result_cache_pool'])) + (int) (isset($this->privates['doctrine.system_cache_pool'])) + (int) (false) + (int) (isset($this->services['doctrine']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'doctrine.result_cache_pool' => [0 => 'reset'], 'doctrine.system_cache_pool' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'doctrine' => [0 => 'reset']]);
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Session.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /*
     * Gets the public 'test.client' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\KernelBrowser
     */
    protected function getTest_ClientService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/AbstractBrowser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelBrowser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/KernelBrowser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/History.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/CookieJar.php';

        return new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($this->services['kernel'] ?? $this->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar()));
    }

    /*
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getTest_PrivateServicesLocatorService()
    {
        return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Doctrine\\Common\\Annotations\\Reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'Doctrine\\DBAL\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\DBAL\\Driver\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\ORM\\EntityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'Doctrine\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Announcer\\FindAnnouncers' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Announcer\\FindAnnouncers', 'getFindAnnouncersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Announcer\\GetAnnouncers' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Announcer\\GetAnnouncers', 'getGetAnnouncersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Brand\\FindBrands' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Brand\\FindBrands', 'getFindBrandsService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Brand\\GetBrands' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Brand\\GetBrands', 'getGetBrandsService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Categories\\FindCategories' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Categories\\FindCategories', 'getFindCategoriesService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Cities\\FindCities' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Cities\\FindCities', 'getFindCitiesService', false],
            'Emn\\CodeChallenge\\Application\\Service\\IabCategories\\GetIabCategories' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\IabCategories\\GetIabCategories', 'getGetIabCategoriesService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Labels\\FindLabels' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Labels\\FindLabels', 'getFindLabelsService', false],
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateMultiOffers' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateMultiOffers', 'getCreateMultiOffersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateRelation' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateRelation', 'getCreateRelationService', false],
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetMultiOffer' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetMultiOffer', 'getGetMultiOfferService', false],
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetOfferNewsletter' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetOfferNewsletter', 'getGetOfferNewsletterService', false],
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\UpdateMultiOffers' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\UpdateMultiOffers', 'getUpdateMultiOffersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Newsletters\\GetNewsletter' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Newsletters\\GetNewsletter', 'getGetNewsletterService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Newsletters\\UpdateNewsletters' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Newsletters\\UpdateNewsletters', 'getUpdateNewslettersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\CreateOfferNewsletter' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\CreateOfferNewsletter', 'getCreateOfferNewsletterService', false],
            'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\DeleteOfferNewsletter' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\DeleteOfferNewsletter', 'getDeleteOfferNewsletterService', false],
            'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\UpdateOfferNewsletter' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\UpdateOfferNewsletter', 'getUpdateOfferNewsletterService', false],
            'Emn\\CodeChallenge\\Application\\Service\\OfferView\\LoadOfferViews' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\OfferView\\LoadOfferViews', 'getLoadOfferViewsService', false],
            'Emn\\CodeChallenge\\Application\\Service\\OffersAdded\\GetOffersAdded' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\OffersAdded\\GetOffersAdded', 'getGetOffersAddedService', false],
            'Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\FilterOffersToAdd' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\FilterOffersToAdd', 'getFilterOffersToAddService', false],
            'Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\GetOffersToAdd' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\GetOffersToAdd', 'getGetOffersToAddService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Offers\\DeleteOffers' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Offers\\DeleteOffers', 'getDeleteOffersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Offers\\DuplicateOffer' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Offers\\DuplicateOffer', 'getDuplicateOfferService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Offers\\GetOffers' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Offers\\GetOffers', 'getGetOffersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Providers\\FindProviders' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Providers\\FindProviders', 'getFindProvidersService', false],
            'Emn\\CodeChallenge\\Application\\Service\\Providers\\GetProviders' => ['privates', 'Emn\\CodeChallenge\\Application\\Service\\Providers\\GetProviders', 'getGetProvidersService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository', 'getAnnouncerOfferViewRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository', 'getAnnouncerRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository', 'getBrandOfferViewRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository', 'getBrandRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository', 'getCategoriesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository', 'getCitiesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesFinder' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesFinder', 'getIabCategoriesFinderService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository', 'getIabCategoriesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository', 'getLabelsRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository', 'getNewslettersRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository', 'getOfferNewsletterRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OfferView\\OfferViewLoader' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OfferView\\OfferViewLoader', 'getOfferViewLoaderService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository', 'getOffersAddedRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository', 'getOffersCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLFinder' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLFinder', 'getOffersIabCategoriesLFinderService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository', 'getOffersIabCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository', 'getOffersImagesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository', 'getOffersOffersLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository', 'getOffersPlatformsLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository', 'getOffersToAddFilterRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository', 'getOffersToAddRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OfferDuplicator' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OfferDuplicator', 'getOfferDuplicatorService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository', 'getOffersRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository', 'getProvidersOfferViewRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository', 'getProvidersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Command\\OfferViewsCommand' => ['services', 'console.command.public_alias.Emn\\CodeChallenge\\Infrastructure\\Command\\OfferViewsCommand', 'getOfferViewsCommandService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Announcer\\DoctrineAnnouncersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Announcer\\DoctrineAnnouncersRepository', 'getDoctrineAnnouncersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Brand\\DoctrineBrandsRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Brand\\DoctrineBrandsRepository', 'getDoctrineBrandsRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\IabCategories\\DoctrineIabCategoriesRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\IabCategories\\DoctrineIabCategoriesRepository', 'getDoctrineIabCategoriesRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Newsletters\\DoctrineNewslettersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Newsletters\\DoctrineNewslettersRepository', 'getDoctrineNewslettersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OfferNewsletter\\DoctrineOfferNewsletterRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OfferNewsletter\\DoctrineOfferNewsletterRepository', 'getDoctrineOfferNewsletterRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersAdded\\DoctrineOffersAddedRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersAdded\\DoctrineOffersAddedRepository', 'getDoctrineOffersAddedRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersCategoriesL\\DoctrineOffersCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersCategoriesL\\DoctrineOffersCategoriesLRepository', 'getDoctrineOffersCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersIabCategoriesL\\DoctrineOffersIabCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersIabCategoriesL\\DoctrineOffersIabCategoriesLRepository', 'getDoctrineOffersIabCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersImages\\DoctrineOffersImagesRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersImages\\DoctrineOffersImagesRepository', 'getDoctrineOffersImagesRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersOffersL\\DoctrineOffersOffersLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersOffersL\\DoctrineOffersOffersLRepository', 'getDoctrineOffersOffersLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersPlatformsL\\DoctrineOffersPlatformsLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersPlatformsL\\DoctrineOffersPlatformsLRepository', 'getDoctrineOffersPlatformsLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddFilterRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddFilterRepository', 'getDoctrineOffersToAddFilterRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddRepository', 'getDoctrineOffersToAddRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Offers\\DoctrineOffersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Offers\\DoctrineOffersRepository', 'getDoctrineOffersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Providers\\DoctrineProvidersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Providers\\DoctrineProvidersRepository', 'getDoctrineProvidersRepositoryService', false],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Psr\\Cache\\CacheItemPoolInterface $doctrineResultCachePool' => ['privates', 'doctrine.result_cache_pool', 'getDoctrine_ResultCachePoolService', false],
            'Psr\\Cache\\CacheItemPoolInterface $doctrineSystemCachePool' => ['privates', 'doctrine.system_cache_pool', 'getDoctrine_SystemCachePoolService', false],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Psr\\Log\\LoggerInterface' => ['privates', 'logger', 'getLoggerService', false],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => ['services', 'session', 'getSessionService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface $doctrineResultCachePool' => ['privates', 'doctrine.result_cache_pool', 'getDoctrine_ResultCachePoolService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface $doctrineSystemCachePool' => ['privates', 'doctrine.system_cache_pool', 'getDoctrine_SystemCachePoolService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.cache' => ['privates', 'annotations.cache', 'getAnnotations_CacheService', false],
            'annotations.cache_warmer' => ['privates', 'annotations.cache_warmer', 'getAnnotations_CacheWarmerService', false],
            'annotations.cached_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.dummy_registry' => ['privates', 'annotations.dummy_registry', 'getAnnotations_DummyRegistryService', false],
            'annotations.reader' => ['privates', 'annotations.reader', 'getAnnotations_ReaderService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'argument_resolver', 'getArgumentResolverService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.I3K77mT', 'get_ServiceLocator_I3K77mTService', false],
            'argument_resolver.default' => ['privates', 'argument_resolver.default', 'getArgumentResolver_DefaultService', false],
            'argument_resolver.request' => ['privates', 'argument_resolver.request', 'getArgumentResolver_RequestService', false],
            'argument_resolver.request_attribute' => ['privates', 'argument_resolver.request_attribute', 'getArgumentResolver_RequestAttributeService', false],
            'argument_resolver.service' => ['privates', 'argument_resolver.service', 'getArgumentResolver_ServiceService', false],
            'argument_resolver.session' => ['privates', 'argument_resolver.session', 'getArgumentResolver_SessionService', false],
            'argument_resolver.variadic' => ['privates', 'argument_resolver.variadic', 'getArgumentResolver_VariadicService', false],
            'cache.annotations' => ['privates', 'cache.annotations', 'getCache_AnnotationsService', false],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', false],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', false],
            'cache.default_pdo_provider' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService', false],
            'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'controller_resolver' => ['privates', 'controller_resolver', 'getControllerResolverService', false],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.dbal.connection_factory' => ['privates', 'doctrine.dbal.connection_factory', 'getDoctrine_Dbal_ConnectionFactoryService', false],
            'doctrine.dbal.default_connection.configuration' => ['privates', 'doctrine.dbal.default_connection.configuration', 'getDoctrine_Dbal_DefaultConnection_ConfigurationService', false],
            'doctrine.dbal.default_connection.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.dbal.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.orm.cache.provider.doctrine.result_cache_pool' => ['privates', 'doctrine.orm.cache.provider.doctrine.result_cache_pool', 'getDoctrine_Orm_Cache_Provider_Doctrine_ResultCachePoolService', false],
            'doctrine.orm.cache.provider.doctrine.system_cache_pool' => ['privates', 'doctrine.orm.cache.provider.doctrine.system_cache_pool', 'getDoctrine_Orm_Cache_Provider_Doctrine_SystemCachePoolService', false],
            'doctrine.orm.container_repository_factory' => ['privates', 'doctrine.orm.container_repository_factory', 'getDoctrine_Orm_ContainerRepositoryFactoryService', false],
            'doctrine.orm.default_configuration' => ['privates', 'doctrine.orm.default_configuration', 'getDoctrine_Orm_DefaultConfigurationService', false],
            'doctrine.orm.default_entity_listener_resolver' => ['privates', 'doctrine.orm.default_entity_listener_resolver', 'getDoctrine_Orm_DefaultEntityListenerResolverService', false],
            'doctrine.orm.default_entity_manager.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
            'doctrine.orm.default_manager_configurator' => ['privates', 'doctrine.orm.default_manager_configurator', 'getDoctrine_Orm_DefaultManagerConfiguratorService', false],
            'doctrine.orm.default_metadata_cache' => ['privates', 'doctrine.orm.cache.provider.doctrine.system_cache_pool', 'getDoctrine_Orm_Cache_Provider_Doctrine_SystemCachePoolService', false],
            'doctrine.orm.default_metadata_driver' => ['privates', 'doctrine.orm.default_metadata_driver', 'getDoctrine_Orm_DefaultMetadataDriverService', false],
            'doctrine.orm.default_query_cache' => ['privates', 'doctrine.orm.cache.provider.doctrine.system_cache_pool', 'getDoctrine_Orm_Cache_Provider_Doctrine_SystemCachePoolService', false],
            'doctrine.orm.default_result_cache' => ['privates', 'doctrine.orm.cache.provider.doctrine.result_cache_pool', 'getDoctrine_Orm_Cache_Provider_Doctrine_ResultCachePoolService', false],
            'doctrine.orm.default_xml_metadata_driver' => ['privates', 'doctrine.orm.default_xml_metadata_driver', 'getDoctrine_Orm_DefaultXmlMetadataDriverService', false],
            'doctrine.orm.metadata.annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'doctrine.orm.naming_strategy.default' => ['privates', 'doctrine.orm.naming_strategy.default', 'getDoctrine_Orm_NamingStrategy_DefaultService', false],
            'doctrine.orm.proxy_cache_warmer' => ['privates', 'doctrine.orm.proxy_cache_warmer', 'getDoctrine_Orm_ProxyCacheWarmerService', false],
            'doctrine.orm.quote_strategy.default' => ['privates', 'doctrine.orm.quote_strategy.default', 'getDoctrine_Orm_QuoteStrategy_DefaultService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.result_cache_pool' => ['privates', 'doctrine.result_cache_pool', 'getDoctrine_ResultCachePoolService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine.system_cache_pool' => ['privates', 'doctrine.system_cache_pool', 'getDoctrine_SystemCachePoolService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_renderer' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListenerService', false],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', false],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'routing.loader.annotation' => ['privates', 'routing.loader.annotation', 'getRouting_Loader_AnnotationService', false],
            'routing.loader.annotation.directory' => ['privates', 'routing.loader.annotation.directory', 'getRouting_Loader_Annotation_DirectoryService', false],
            'routing.loader.annotation.file' => ['privates', 'routing.loader.annotation.file', 'getRouting_Loader_Annotation_FileService', false],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', false],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', false],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', false],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', false],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', false],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', false],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', false],
            'secrets.local_vault' => ['privates', 'secrets.local_vault', 'getSecrets_LocalVaultService', false],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', false],
            'session.storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
            'session.storage.metadata_bag' => ['privates', 'session.storage.metadata_bag', 'getSession_Storage_MetadataBagService', false],
            'session.storage.native' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
            'session_listener' => ['privates', 'session_listener', 'getSessionListenerService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', false],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', false],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
        ], [
            'Doctrine\\Common\\Annotations\\Reader' => '?',
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => '?',
            'Doctrine\\DBAL\\Connection' => '?',
            'Doctrine\\DBAL\\Driver\\Connection' => '?',
            'Doctrine\\ORM\\EntityManagerInterface' => '?',
            'Doctrine\\Persistence\\ManagerRegistry' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Announcer\\FindAnnouncers' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Announcer\\GetAnnouncers' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Brand\\FindBrands' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Brand\\GetBrands' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Categories\\FindCategories' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Cities\\FindCities' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\IabCategories\\GetIabCategories' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Labels\\FindLabels' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateMultiOffers' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateRelation' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetMultiOffer' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetOfferNewsletter' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\UpdateMultiOffers' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Newsletters\\GetNewsletter' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Newsletters\\UpdateNewsletters' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\CreateOfferNewsletter' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\DeleteOfferNewsletter' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\UpdateOfferNewsletter' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\OfferView\\LoadOfferViews' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\OffersAdded\\GetOffersAdded' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\FilterOffersToAdd' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\GetOffersToAdd' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Offers\\DeleteOffers' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Offers\\DuplicateOffer' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Offers\\GetOffers' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Providers\\FindProviders' => '?',
            'Emn\\CodeChallenge\\Application\\Service\\Providers\\GetProviders' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesFinder' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OfferView\\OfferViewLoader' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLFinder' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OfferDuplicator' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Command\\OfferViewsCommand' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Announcer\\DoctrineAnnouncersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Brand\\DoctrineBrandsRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\IabCategories\\DoctrineIabCategoriesRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Newsletters\\DoctrineNewslettersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OfferNewsletter\\DoctrineOfferNewsletterRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersAdded\\DoctrineOffersAddedRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersCategoriesL\\DoctrineOffersCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersIabCategoriesL\\DoctrineOffersIabCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersImages\\DoctrineOffersImagesRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersOffersL\\DoctrineOffersOffersLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersPlatformsL\\DoctrineOffersPlatformsLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddFilterRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Offers\\DoctrineOffersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Providers\\DoctrineProvidersRepository' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Psr\\Cache\\CacheItemPoolInterface $doctrineResultCachePool' => '?',
            'Psr\\Cache\\CacheItemPoolInterface $doctrineSystemCachePool' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface $doctrineResultCachePool' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface $doctrineSystemCachePool' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'annotation_reader' => '?',
            'annotations.cache' => '?',
            'annotations.cache_warmer' => '?',
            'annotations.cached_reader' => '?',
            'annotations.dummy_registry' => '?',
            'annotations.reader' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.controller_locator' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.variadic' => '?',
            'cache.annotations' => '?',
            'cache.default_clearer' => '?',
            'cache.default_marshaller' => '?',
            'cache.default_pdo_provider' => '?',
            'config_cache_factory' => '?',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.yaml_lint' => '?',
            'console.error_listener' => '?',
            'console.suggest_missing_package_subscriber' => '?',
            'container.env_var_processor' => '?',
            'controller_resolver' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.file_link_formatter' => '?',
            'doctrine.cache_clear_metadata_command' => '?',
            'doctrine.cache_clear_query_cache_command' => '?',
            'doctrine.cache_clear_result_command' => '?',
            'doctrine.cache_collection_region_command' => '?',
            'doctrine.clear_entity_region_command' => '?',
            'doctrine.clear_query_region_command' => '?',
            'doctrine.database_create_command' => '?',
            'doctrine.database_drop_command' => '?',
            'doctrine.database_import_command' => '?',
            'doctrine.dbal.connection_factory' => '?',
            'doctrine.dbal.default_connection.configuration' => '?',
            'doctrine.dbal.default_connection.event_manager' => '?',
            'doctrine.dbal.event_manager' => '?',
            'doctrine.ensure_production_settings_command' => '?',
            'doctrine.mapping_convert_command' => '?',
            'doctrine.mapping_import_command' => '?',
            'doctrine.mapping_info_command' => '?',
            'doctrine.orm.cache.provider.doctrine.result_cache_pool' => '?',
            'doctrine.orm.cache.provider.doctrine.system_cache_pool' => '?',
            'doctrine.orm.container_repository_factory' => '?',
            'doctrine.orm.default_configuration' => '?',
            'doctrine.orm.default_entity_listener_resolver' => '?',
            'doctrine.orm.default_entity_manager.event_manager' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.default_manager_configurator' => '?',
            'doctrine.orm.default_metadata_cache' => '?',
            'doctrine.orm.default_metadata_driver' => '?',
            'doctrine.orm.default_query_cache' => '?',
            'doctrine.orm.default_result_cache' => '?',
            'doctrine.orm.default_xml_metadata_driver' => '?',
            'doctrine.orm.metadata.annotation_reader' => '?',
            'doctrine.orm.naming_strategy.default' => '?',
            'doctrine.orm.proxy_cache_warmer' => '?',
            'doctrine.orm.quote_strategy.default' => '?',
            'doctrine.query_dql_command' => '?',
            'doctrine.query_sql_command' => '?',
            'doctrine.result_cache_pool' => '?',
            'doctrine.schema_create_command' => '?',
            'doctrine.schema_drop_command' => '?',
            'doctrine.schema_update_command' => '?',
            'doctrine.schema_validate_command' => '?',
            'doctrine.system_cache_pool' => '?',
            'doctrine_migrations.diff_command' => '?',
            'doctrine_migrations.dump_schema_command' => '?',
            'doctrine_migrations.execute_command' => '?',
            'doctrine_migrations.generate_command' => '?',
            'doctrine_migrations.latest_command' => '?',
            'doctrine_migrations.migrate_command' => '?',
            'doctrine_migrations.rollup_command' => '?',
            'doctrine_migrations.status_command' => '?',
            'doctrine_migrations.up_to_date_command' => '?',
            'doctrine_migrations.version_command' => '?',
            'error_handler.error_renderer.html' => '?',
            'error_renderer' => '?',
            'error_renderer.html' => '?',
            'exception_listener' => '?',
            'file_locator' => '?',
            'locale_listener' => '?',
            'logger' => '?',
            'parameter_bag' => '?',
            'response_listener' => '?',
            'router.cache_warmer' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router_listener' => '?',
            'routing.loader.annotation' => '?',
            'routing.loader.annotation.directory' => '?',
            'routing.loader.annotation.file' => '?',
            'routing.loader.container' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.php' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.resolver' => '?',
            'secrets.local_vault' => '?',
            'secrets.vault' => '?',
            'session.storage' => '?',
            'session.storage.metadata_bag' => '?',
            'session.storage.native' => '?',
            'session_listener' => '?',
            'streamed_response_listener' => '?',
            'test.client.cookiejar' => '?',
            'test.client.history' => '?',
            'test.session.listener' => '?',
            'validate_request_listener' => '?',
        ]);
    }

    /*
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    protected function getTest_ServiceContainerService()
    {
        return $this->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($this->services['kernel'] ?? $this->get('kernel', 1)), 'test.private_services_locator');
    }

    /*
     * Gets the private '.service_locator.I3K77mT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_I3K77mTService()
    {
        return $this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);
    }

    /*
     * Gets the private '.service_locator.pNNo5z3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PNNo5z3Service()
    {
        return $this->privates['.service_locator.pNNo5z3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'doctrine' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'session' => '?',
        ]);
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Announcer\FindAnnouncers' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Announcer\FindAnnouncers
     */
    protected function getFindAnnouncersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Announcer/FindAnnouncers.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Announcer\\FindAnnouncers'] = new \CodeChallenge\Application\Service\Announcer\FindAnnouncers(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository'] ?? $this->getAnnouncerOfferViewRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Announcer\GetAnnouncers' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Announcer\GetAnnouncers
     */
    protected function getGetAnnouncersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Announcer/GetAnnouncers.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Announcer\\GetAnnouncers'] = new \CodeChallenge\Application\Service\Announcer\GetAnnouncers(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository'] ?? $this->getAnnouncerRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Brand\FindBrands' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Brand\FindBrands
     */
    protected function getFindBrandsService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Brand/FindBrands.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Brand\\FindBrands'] = new \CodeChallenge\Application\Service\Brand\FindBrands(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository'] ?? $this->getBrandOfferViewRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Brand\GetBrands' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Brand\GetBrands
     */
    protected function getGetBrandsService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Brand/GetBrands.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Brand\\GetBrands'] = new \CodeChallenge\Application\Service\Brand\GetBrands(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository'] ?? $this->getBrandRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Categories\FindCategories' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Categories\FindCategories
     */
    protected function getFindCategoriesService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Categories/FindCategories.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Categories\\FindCategories'] = new \CodeChallenge\Application\Service\Categories\FindCategories(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository'] ?? $this->getCategoriesRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Cities\FindCities' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Cities\FindCities
     */
    protected function getFindCitiesService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Cities/FindCities.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Cities\\FindCities'] = new \CodeChallenge\Application\Service\Cities\FindCities(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository'] ?? $this->getCitiesRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\IabCategories\GetIabCategories' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\IabCategories\GetIabCategories
     */
    protected function getGetIabCategoriesService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/IabCategories/GetIabCategories.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\IabCategories\\GetIabCategories'] = new \CodeChallenge\Application\Service\IabCategories\GetIabCategories(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository'] ?? $this->getIabCategoriesRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Labels\FindLabels' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Labels\FindLabels
     */
    protected function getFindLabelsService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Labels/FindLabels.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Labels\\FindLabels'] = new \CodeChallenge\Application\Service\Labels\FindLabels(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository'] ?? $this->getLabelsRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\MultiOffers\CreateMultiOffers' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\MultiOffers\CreateMultiOffers
     */
    protected function getCreateMultiOffersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/MultiOffers/CreateMultiOffers.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateMultiOffers'] = new \CodeChallenge\Application\Service\MultiOffers\CreateMultiOffers(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] ?? $this->getOffersRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository'] ?? $this->getOfferNewsletterRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository'] ?? $this->getOffersIabCategoriesLRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\MultiOffers\CreateRelation' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\MultiOffers\CreateRelation
     */
    protected function getCreateRelationService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/MultiOffers/CreateRelation.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\CreateRelation'] = new \CodeChallenge\Application\Service\MultiOffers\CreateRelation(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] ?? $this->getOffersRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository'] ?? $this->getOfferNewsletterRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\MultiOffers\GetMultiOffer' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\MultiOffers\GetMultiOffer
     */
    protected function getGetMultiOfferService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/MultiOffers/GetMultiOffer.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetMultiOffer'] = new \CodeChallenge\Application\Service\MultiOffers\GetMultiOffer(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] ?? $this->getOffersRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository'] ?? $this->getOffersIabCategoriesLRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository'] ?? $this->getIabCategoriesRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\MultiOffers\GetOfferNewsletter' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\MultiOffers\GetOfferNewsletter
     */
    protected function getGetOfferNewsletterService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/MultiOffers/GetOfferNewsletter.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\GetOfferNewsletter'] = new \CodeChallenge\Application\Service\MultiOffers\GetOfferNewsletter(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository'] ?? $this->getOfferNewsletterRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\MultiOffers\UpdateMultiOffers' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\MultiOffers\UpdateMultiOffers
     */
    protected function getUpdateMultiOffersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/MultiOffers/UpdateMultiOffers.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\MultiOffers\\UpdateMultiOffers'] = new \CodeChallenge\Application\Service\MultiOffers\UpdateMultiOffers(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] ?? $this->getOffersRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Newsletters\GetNewsletter' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Newsletters\GetNewsletter
     */
    protected function getGetNewsletterService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Newsletters/GetNewsletter.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Newsletters\\GetNewsletter'] = new \CodeChallenge\Application\Service\Newsletters\GetNewsletter(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository'] ?? $this->getNewslettersRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Newsletters\UpdateNewsletters' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Newsletters\UpdateNewsletters
     */
    protected function getUpdateNewslettersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Newsletters/UpdateNewsletters.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Newsletters\\UpdateNewsletters'] = new \CodeChallenge\Application\Service\Newsletters\UpdateNewsletters(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository'] ?? $this->getNewslettersRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\OfferNewsletter\CreateOfferNewsletter' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\OfferNewsletter\CreateOfferNewsletter
     */
    protected function getCreateOfferNewsletterService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/OfferNewsletter/CreateOfferNewsletter.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\CreateOfferNewsletter'] = new \CodeChallenge\Application\Service\OfferNewsletter\CreateOfferNewsletter(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository'] ?? $this->getOfferNewsletterRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\OfferNewsletter\DeleteOfferNewsletter' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\OfferNewsletter\DeleteOfferNewsletter
     */
    protected function getDeleteOfferNewsletterService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/OfferNewsletter/DeleteOfferNewsletter.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\DeleteOfferNewsletter'] = new \CodeChallenge\Application\Service\OfferNewsletter\DeleteOfferNewsletter(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository'] ?? $this->getOfferNewsletterRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\OfferNewsletter\UpdateOfferNewsletter' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\OfferNewsletter\UpdateOfferNewsletter
     */
    protected function getUpdateOfferNewsletterService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/OfferNewsletter/UpdateOfferNewsletter.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferNewsletter\\UpdateOfferNewsletter'] = new \CodeChallenge\Application\Service\OfferNewsletter\UpdateOfferNewsletter(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository'] ?? $this->getOfferNewsletterRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\OfferView\LoadOfferViews' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\OfferView\LoadOfferViews
     */
    protected function getLoadOfferViewsService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/OfferView/LoadOfferViews.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\OfferView\\LoadOfferViews'] = new \CodeChallenge\Application\Service\OfferView\LoadOfferViews(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferView\\OfferViewLoader'] ?? $this->getOfferViewLoaderService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\OffersAdded\GetOffersAdded' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\OffersAdded\GetOffersAdded
     */
    protected function getGetOffersAddedService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/OffersAdded/GetOffersAdded.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\OffersAdded\\GetOffersAdded'] = new \CodeChallenge\Application\Service\OffersAdded\GetOffersAdded(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository'] ?? $this->getOffersAddedRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\OffersToAdd\FilterOffersToAdd' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\OffersToAdd\FilterOffersToAdd
     */
    protected function getFilterOffersToAddService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/OffersToAdd/FilterOffersToAdd.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\FilterOffersToAdd'] = new \CodeChallenge\Application\Service\OffersToAdd\FilterOffersToAdd(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository'] ?? $this->getOffersToAddFilterRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\OffersToAdd\GetOffersToAdd' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\OffersToAdd\GetOffersToAdd
     */
    protected function getGetOffersToAddService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/OffersToAdd/GetOffersToAdd.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\OffersToAdd\\GetOffersToAdd'] = new \CodeChallenge\Application\Service\OffersToAdd\GetOffersToAdd(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository'] ?? $this->getOffersToAddRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Offers\DeleteOffers' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Offers\DeleteOffers
     */
    protected function getDeleteOffersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Offers/DeleteOffers.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Offers\\DeleteOffers'] = new \CodeChallenge\Application\Service\Offers\DeleteOffers(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] ?? $this->getOffersRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Offers\DuplicateOffer' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Offers\DuplicateOffer
     */
    protected function getDuplicateOfferService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Offers/DuplicateOffer.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Offers\\DuplicateOffer'] = new \CodeChallenge\Application\Service\Offers\DuplicateOffer(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OfferDuplicator'] ?? $this->getOfferDuplicatorService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Offers\GetOffers' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Offers\GetOffers
     */
    protected function getGetOffersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Offers/GetOffers.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Offers\\GetOffers'] = new \CodeChallenge\Application\Service\Offers\GetOffers(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] ?? $this->getOffersRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Providers\FindProviders' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Providers\FindProviders
     */
    protected function getFindProvidersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Providers/FindProviders.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Providers\\FindProviders'] = new \CodeChallenge\Application\Service\Providers\FindProviders(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository'] ?? $this->getProvidersOfferViewRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Application\Service\Providers\GetProviders' shared autowired service.
     *
     * @return \CodeChallenge\Application\Service\Providers\GetProviders
     */
    protected function getGetProvidersService()
    {
        include_once \dirname(__DIR__, 4).'/src/Application/Service/Providers/GetProviders.php';

        return $this->privates['Emn\\CodeChallenge\\Application\\Service\\Providers\\GetProviders'] = new \CodeChallenge\Application\Service\Providers\GetProviders(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository'] ?? $this->getProvidersRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Announcer\AnnouncerOfferViewRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Announcer\DoctrineAnnouncersOfferViewRepository
     */
    protected function getAnnouncerOfferViewRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Announcer/AnnouncerOfferViewRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Announcer/DoctrineAnnouncersOfferViewRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Announcer\DoctrineAnnouncersOfferViewRepository(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Announcer\AnnouncerRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Announcer\DoctrineAnnouncersRepository
     */
    protected function getAnnouncerRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Announcer/AnnouncerRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Announcer/DoctrineAnnouncersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Announcer\DoctrineAnnouncersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Brand\BrandOfferViewRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Brand\DoctrineBrandsOfferViewRepository
     */
    protected function getBrandOfferViewRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Brand/BrandOfferViewRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Brand/DoctrineBrandsOfferViewRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Brand\DoctrineBrandsOfferViewRepository(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Brand\BrandRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Brand\DoctrineBrandsRepository
     */
    protected function getBrandRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Brand/BrandRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Brand/DoctrineBrandsRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Brand\DoctrineBrandsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Categories\CategoriesRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Categories\DoctrineCategoriesRepository
     */
    protected function getCategoriesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Categories/CategoriesRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Categories/DoctrineCategoriesRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Categories\DoctrineCategoriesRepository(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Cities\CitiesRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Cities\DoctrineCitiesRepository
     */
    protected function getCitiesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Cities/CitiesRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Cities/DoctrineCitiesRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Cities\DoctrineCitiesRepository(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\IabCategories\IabCategoriesFinder' shared autowired service.
     *
     * @return \CodeChallenge\Domain\Model\IabCategories\IabCategoriesFinder
     */
    protected function getIabCategoriesFinderService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/IabCategories/IabCategoriesFinder.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesFinder'] = new \CodeChallenge\Domain\Model\IabCategories\IabCategoriesFinder(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository'] ?? $this->getIabCategoriesRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\IabCategories\IabCategoriesRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\IabCategories\DoctrineIabCategoriesRepository
     */
    protected function getIabCategoriesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/IabCategories/IabCategoriesRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/IabCategories/DoctrineIabCategoriesRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\IabCategories\DoctrineIabCategoriesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Labels\LabelsRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Labels\DoctrineLabelsRepository
     */
    protected function getLabelsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Labels/LabelsRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Labels/DoctrineLabelsRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Labels\DoctrineLabelsRepository(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Newsletters\NewslettersRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Newsletters\DoctrineNewslettersRepository
     */
    protected function getNewslettersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Newsletters/NewslettersRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Newsletters/DoctrineNewslettersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Newsletters\DoctrineNewslettersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OfferNewsletter\OfferNewsletterRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OfferNewsletter\DoctrineOfferNewsletterRepository
     */
    protected function getOfferNewsletterRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OfferNewsletter/OfferNewsletterRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OfferNewsletter/DoctrineOfferNewsletterRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OfferNewsletter\DoctrineOfferNewsletterRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository'] ?? $this->getOffersIabCategoriesLRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository'] ?? $this->getIabCategoriesRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OfferView\OfferViewLoader' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OfferView\DoctrineOfferViewLoader
     */
    protected function getOfferViewLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OfferView/OfferViewLoader.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OfferView/DoctrineOfferViewLoader.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OfferView\\OfferViewLoader'] = new \CodeChallenge\Infrastructure\Domain\Model\OfferView\DoctrineOfferViewLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersAdded\OffersAddedRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersAdded\DoctrineOffersAddedRepository
     */
    protected function getOffersAddedRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersAdded/OffersAddedRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersAdded/DoctrineOffersAddedRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersAdded\DoctrineOffersAddedRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersCategoriesL\OffersCategoriesLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersCategoriesL\DoctrineOffersCategoriesLRepository
     */
    protected function getOffersCategoriesLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersCategoriesL/OffersCategoriesLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersCategoriesL/DoctrineOffersCategoriesLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersCategoriesL\DoctrineOffersCategoriesLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersIabCategoriesL\OffersIabCategoriesLFinder' shared autowired service.
     *
     * @return \CodeChallenge\Domain\Model\OffersIabCategoriesL\OffersIabCategoriesLFinder
     */
    protected function getOffersIabCategoriesLFinderService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersIabCategoriesL/OffersIabCategoriesLFinder.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLFinder'] = new \CodeChallenge\Domain\Model\OffersIabCategoriesL\OffersIabCategoriesLFinder(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository'] ?? $this->getOffersIabCategoriesLRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersIabCategoriesL\OffersIabCategoriesLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersIabCategoriesL\DoctrineOffersIabCategoriesLRepository
     */
    protected function getOffersIabCategoriesLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersIabCategoriesL/OffersIabCategoriesLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersIabCategoriesL/DoctrineOffersIabCategoriesLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersIabCategoriesL\DoctrineOffersIabCategoriesLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersImages\OffersImagesRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersImages\DoctrineOffersImagesRepository
     */
    protected function getOffersImagesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersImages/OffersImagesRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersImages/DoctrineOffersImagesRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersImages\DoctrineOffersImagesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersOffersL\OffersOffersLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersOffersL\DoctrineOffersOffersLRepository
     */
    protected function getOffersOffersLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersOffersL/OffersOffersLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersOffersL/DoctrineOffersOffersLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersOffersL\DoctrineOffersOffersLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersPlatformsL\OffersPlatformsLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersPlatformsL\DoctrineOffersPlatformsLRepository
     */
    protected function getOffersPlatformsLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersPlatformsL/OffersPlatformsLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersPlatformsL/DoctrineOffersPlatformsLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersPlatformsL\DoctrineOffersPlatformsLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersToAdd\OffersToAddFilterRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddFilterRepository
     */
    protected function getOffersToAddFilterRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersToAdd/OffersToAddFilterRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersToAdd/DoctrineOffersToAddFilterRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddFilterRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\OffersToAdd\OffersToAddRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddRepository
     */
    protected function getOffersToAddRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersToAdd/OffersToAddRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersToAdd/DoctrineOffersToAddRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Offers\OfferDuplicator' shared autowired service.
     *
     * @return \CodeChallenge\Domain\Model\Offers\OfferDuplicator
     */
    protected function getOfferDuplicatorService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Offers/OfferDuplicator.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OfferDuplicator'] = new \CodeChallenge\Domain\Model\Offers\OfferDuplicator(($this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] ?? $this->getOffersRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository'] ?? $this->getOffersCategoriesLRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository'] ?? $this->getOffersOffersLRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository'] ?? $this->getOffersIabCategoriesLRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository'] ?? $this->getOffersImagesRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository'] ?? $this->getOffersPlatformsLRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Offers\OffersRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Offers\DoctrineOffersRepository
     */
    protected function getOffersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Offers/OffersRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Offers/DoctrineOffersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Offers\DoctrineOffersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLFinder'] ?? $this->getOffersIabCategoriesLFinderService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesFinder'] ?? $this->getIabCategoriesFinderService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Providers\ProvidersOfferViewRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Providers\DoctrineProvidersOfferViewRepository
     */
    protected function getProvidersOfferViewRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Providers/ProvidersOfferViewRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Providers/DoctrineProvidersOfferViewRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Providers\DoctrineProvidersOfferViewRepository(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Domain\Model\Providers\ProvidersRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Providers\DoctrineProvidersRepository
     */
    protected function getProvidersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Providers/ProvidersRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Providers/DoctrineProvidersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Providers\DoctrineProvidersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\Announcer\DoctrineAnnouncersRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Announcer\DoctrineAnnouncersRepository
     */
    protected function getDoctrineAnnouncersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Announcer/AnnouncerRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Announcer/DoctrineAnnouncersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Announcer\\DoctrineAnnouncersRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Announcer\DoctrineAnnouncersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\Brand\DoctrineBrandsRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Brand\DoctrineBrandsRepository
     */
    protected function getDoctrineBrandsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Brand/BrandRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Brand/DoctrineBrandsRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Brand\\DoctrineBrandsRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Brand\DoctrineBrandsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\IabCategories\DoctrineIabCategoriesRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\IabCategories\DoctrineIabCategoriesRepository
     */
    protected function getDoctrineIabCategoriesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/IabCategories/IabCategoriesRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/IabCategories/DoctrineIabCategoriesRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\IabCategories\\DoctrineIabCategoriesRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\IabCategories\DoctrineIabCategoriesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\Newsletters\DoctrineNewslettersRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Newsletters\DoctrineNewslettersRepository
     */
    protected function getDoctrineNewslettersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Newsletters/NewslettersRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Newsletters/DoctrineNewslettersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Newsletters\\DoctrineNewslettersRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Newsletters\DoctrineNewslettersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OfferNewsletter\DoctrineOfferNewsletterRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OfferNewsletter\DoctrineOfferNewsletterRepository
     */
    protected function getDoctrineOfferNewsletterRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OfferNewsletter/OfferNewsletterRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OfferNewsletter/DoctrineOfferNewsletterRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OfferNewsletter\\DoctrineOfferNewsletterRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OfferNewsletter\DoctrineOfferNewsletterRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository'] ?? $this->getOffersIabCategoriesLRepositoryService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository'] ?? $this->getIabCategoriesRepositoryService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersAdded\DoctrineOffersAddedRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersAdded\DoctrineOffersAddedRepository
     */
    protected function getDoctrineOffersAddedRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersAdded/OffersAddedRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersAdded/DoctrineOffersAddedRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersAdded\\DoctrineOffersAddedRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersAdded\DoctrineOffersAddedRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersCategoriesL\DoctrineOffersCategoriesLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersCategoriesL\DoctrineOffersCategoriesLRepository
     */
    protected function getDoctrineOffersCategoriesLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersCategoriesL/OffersCategoriesLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersCategoriesL/DoctrineOffersCategoriesLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersCategoriesL\\DoctrineOffersCategoriesLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersCategoriesL\DoctrineOffersCategoriesLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersIabCategoriesL\DoctrineOffersIabCategoriesLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersIabCategoriesL\DoctrineOffersIabCategoriesLRepository
     */
    protected function getDoctrineOffersIabCategoriesLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersIabCategoriesL/OffersIabCategoriesLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersIabCategoriesL/DoctrineOffersIabCategoriesLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersIabCategoriesL\\DoctrineOffersIabCategoriesLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersIabCategoriesL\DoctrineOffersIabCategoriesLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersImages\DoctrineOffersImagesRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersImages\DoctrineOffersImagesRepository
     */
    protected function getDoctrineOffersImagesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersImages/OffersImagesRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersImages/DoctrineOffersImagesRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersImages\\DoctrineOffersImagesRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersImages\DoctrineOffersImagesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersOffersL\DoctrineOffersOffersLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersOffersL\DoctrineOffersOffersLRepository
     */
    protected function getDoctrineOffersOffersLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersOffersL/OffersOffersLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersOffersL/DoctrineOffersOffersLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersOffersL\\DoctrineOffersOffersLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersOffersL\DoctrineOffersOffersLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersPlatformsL\DoctrineOffersPlatformsLRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersPlatformsL\DoctrineOffersPlatformsLRepository
     */
    protected function getDoctrineOffersPlatformsLRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersPlatformsL/OffersPlatformsLRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersPlatformsL/DoctrineOffersPlatformsLRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersPlatformsL\\DoctrineOffersPlatformsLRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersPlatformsL\DoctrineOffersPlatformsLRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddFilterRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddFilterRepository
     */
    protected function getDoctrineOffersToAddFilterRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersToAdd/OffersToAddFilterRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersToAdd/DoctrineOffersToAddFilterRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddFilterRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddFilterRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddRepository
     */
    protected function getDoctrineOffersToAddRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/OffersToAdd/OffersToAddRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/OffersToAdd/DoctrineOffersToAddRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\OffersToAdd\DoctrineOffersToAddRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\Offers\DoctrineOffersRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Offers\DoctrineOffersRepository
     */
    protected function getDoctrineOffersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Offers/OffersRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Offers/DoctrineOffersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Offers\\DoctrineOffersRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Offers\DoctrineOffersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLFinder'] ?? $this->getOffersIabCategoriesLFinderService()), ($this->privates['Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesFinder'] ?? $this->getIabCategoriesFinderService()));
    }

    /*
     * Gets the private 'CodeChallenge\Infrastructure\Domain\Model\Providers\DoctrineProvidersRepository' shared autowired service.
     *
     * @return \CodeChallenge\Infrastructure\Domain\Model\Providers\DoctrineProvidersRepository
     */
    protected function getDoctrineProvidersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Model/Providers/ProvidersRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Domain/Model/Providers/DoctrineProvidersRepository.php';

        return $this->privates['Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Providers\\DoctrineProvidersRepository'] = new \CodeChallenge\Infrastructure\Domain\Model\Providers\DoctrineProvidersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';

        return $this->privates['annotations.cache'] = new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /*
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', false);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';

        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache'] ?? $this->getAnnotations_CacheService()), false);
    }

    /*
     * Gets the private 'annotations.dummy_registry' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationRegistry
     */
    protected function getAnnotations_DummyRegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';

        $this->privates['annotations.dummy_registry'] = $instance = new \Doctrine\Common\Annotations\AnnotationRegistry();

        $instance->registerUniqueLoader('class_exists');

        return $instance;
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';

        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', ($this->privates['annotations.dummy_registry'] ?? $this->getAnnotations_DummyRegistryService()));

        return $instance;
    }

    /*
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /*
     * Gets the private 'argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver
     */
    protected function getArgumentResolverService()
    {
        return $this->privates['argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 4 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 5 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 6));
    }

    /*
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/DefaultValueResolver.php';

        return $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestValueResolver.php';

        return $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestAttributeValueResolver.php';

        return $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /*
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/SessionValueResolver.php';

        return $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/VariadicValueResolver.php';

        return $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('oWDdrrPqHl', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'cache.default_marshaller' shared service.
     *
     * @return \Symfony\Component\Cache\Marshaller\DefaultMarshaller
     */
    protected function getCache_DefaultMarshallerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        return $this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL);
    }

    /*
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory();
    }

    /*
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /*
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'doctrine.result_cache_pool', 7 => 'doctrine.system_cache_pool']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /*
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /*
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /*
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/EventListener/ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'console.suggest_missing_package_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber
     */
    protected function getConsole_SuggestMissingPackageSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/EventListener/SuggestMissingPackageSubscriber.php';

        return $this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber();
    }

    /*
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /*
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->privates['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/ResultCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';

        return $this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']);
    }

    /*
     * Gets the private 'doctrine.dbal.default_connection.configuration' shared service.
     *
     * @return \Doctrine\DBAL\Configuration
     */
    protected function getDoctrine_Dbal_DefaultConnection_ConfigurationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';

        return $this->privates['doctrine.dbal.default_connection.configuration'] = new \Doctrine\DBAL\Configuration();
    }

    /*
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    protected function getDoctrine_Dbal_DefaultConnection_EventManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';

        $this->privates['doctrine.dbal.default_connection.event_manager'] = $instance = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $instance->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.cache.provider.doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Doctrine_ResultCachePoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';

        return $this->privates['doctrine.orm.cache.provider.doctrine.result_cache_pool'] = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService()));
    }

    /*
     * Gets the private 'doctrine.orm.cache.provider.doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Doctrine_SystemCachePoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';

        return $this->privates['doctrine.orm.cache.provider.doctrine.system_cache_pool'] = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()));
    }

    /*
     * Gets the private 'doctrine.orm.container_repository_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory
     */
    protected function getDoctrine_Orm_ContainerRepositoryFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';

        return $this->privates['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository', 'getAnnouncerOfferViewRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository', 'getAnnouncerRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository', 'getBrandOfferViewRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository', 'getBrandRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository', 'getCategoriesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository', 'getCitiesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository', 'getIabCategoriesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository', 'getLabelsRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository', 'getNewslettersRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository', 'getOfferNewsletterRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository', 'getOffersAddedRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository', 'getOffersCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository', 'getOffersIabCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository', 'getOffersImagesRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository', 'getOffersOffersLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository', 'getOffersPlatformsLRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository', 'getOffersToAddFilterRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository', 'getOffersToAddRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository', 'getOffersRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository', 'getProvidersOfferViewRepositoryService', false],
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository' => ['privates', 'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository', 'getProvidersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Announcer\\DoctrineAnnouncersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Announcer\\DoctrineAnnouncersRepository', 'getDoctrineAnnouncersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Brand\\DoctrineBrandsRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Brand\\DoctrineBrandsRepository', 'getDoctrineBrandsRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\IabCategories\\DoctrineIabCategoriesRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\IabCategories\\DoctrineIabCategoriesRepository', 'getDoctrineIabCategoriesRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Newsletters\\DoctrineNewslettersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Newsletters\\DoctrineNewslettersRepository', 'getDoctrineNewslettersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OfferNewsletter\\DoctrineOfferNewsletterRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OfferNewsletter\\DoctrineOfferNewsletterRepository', 'getDoctrineOfferNewsletterRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersAdded\\DoctrineOffersAddedRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersAdded\\DoctrineOffersAddedRepository', 'getDoctrineOffersAddedRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersCategoriesL\\DoctrineOffersCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersCategoriesL\\DoctrineOffersCategoriesLRepository', 'getDoctrineOffersCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersIabCategoriesL\\DoctrineOffersIabCategoriesLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersIabCategoriesL\\DoctrineOffersIabCategoriesLRepository', 'getDoctrineOffersIabCategoriesLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersImages\\DoctrineOffersImagesRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersImages\\DoctrineOffersImagesRepository', 'getDoctrineOffersImagesRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersOffersL\\DoctrineOffersOffersLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersOffersL\\DoctrineOffersOffersLRepository', 'getDoctrineOffersOffersLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersPlatformsL\\DoctrineOffersPlatformsLRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersPlatformsL\\DoctrineOffersPlatformsLRepository', 'getDoctrineOffersPlatformsLRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddFilterRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddFilterRepository', 'getDoctrineOffersToAddFilterRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddRepository', 'getDoctrineOffersToAddRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Offers\\DoctrineOffersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Offers\\DoctrineOffersRepository', 'getDoctrineOffersRepositoryService', false],
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Providers\\DoctrineProvidersRepository' => ['privates', 'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Providers\\DoctrineProvidersRepository', 'getDoctrineProvidersRepositoryService', false],
        ], [
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerOfferViewRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Announcer\\AnnouncerRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandOfferViewRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Brand\\BrandRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Categories\\CategoriesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Cities\\CitiesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\IabCategories\\IabCategoriesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Labels\\LabelsRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Newsletters\\NewslettersRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OfferNewsletter\\OfferNewsletterRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersAdded\\OffersAddedRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersCategoriesL\\OffersCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersIabCategoriesL\\OffersIabCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersImages\\OffersImagesRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersOffersL\\OffersOffersLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersPlatformsL\\OffersPlatformsLRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddFilterRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\OffersToAdd\\OffersToAddRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Offers\\OffersRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersOfferViewRepository' => '?',
            'Emn\\CodeChallenge\\Domain\\Model\\Providers\\ProvidersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Announcer\\DoctrineAnnouncersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Brand\\DoctrineBrandsRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\IabCategories\\DoctrineIabCategoriesRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Newsletters\\DoctrineNewslettersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OfferNewsletter\\DoctrineOfferNewsletterRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersAdded\\DoctrineOffersAddedRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersCategoriesL\\DoctrineOffersCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersIabCategoriesL\\DoctrineOffersIabCategoriesLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersImages\\DoctrineOffersImagesRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersOffersL\\DoctrineOffersOffersLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersPlatformsL\\DoctrineOffersPlatformsLRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddFilterRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\OffersToAdd\\DoctrineOffersToAddRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Offers\\DoctrineOffersRepository' => '?',
            'Emn\\CodeChallenge\\Infrastructure\\Domain\\Model\\Providers\\DoctrineProvidersRepository' => '?',
        ]));
    }

    /*
     * Gets the private 'doctrine.orm.default_configuration' shared service.
     *
     * @return \Doctrine\ORM\Configuration
     */
    protected function getDoctrine_Orm_DefaultConfigurationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';

        $this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

        $a = ($this->privates['doctrine.orm.cache.provider.doctrine.system_cache_pool'] ?? $this->getDoctrine_Orm_Cache_Provider_Doctrine_SystemCachePoolService());

        $instance->setEntityNamespaces(['Emn\\CodeChallenge' => 'Emn\\CodeChallenge']);
        $instance->setMetadataCacheImpl($a);
        $instance->setQueryCacheImpl($a);
        $instance->setResultCacheImpl(($this->privates['doctrine.orm.cache.provider.doctrine.result_cache_pool'] ?? $this->getDoctrine_Orm_Cache_Provider_Doctrine_ResultCachePoolService()));
        $instance->setMetadataDriverImpl(($this->privates['doctrine.orm.default_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultMetadataDriverService()));
        $instance->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(false);
        $instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $instance->setNamingStrategy(($this->privates['doctrine.orm.naming_strategy.default'] ?? ($this->privates['doctrine.orm.naming_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultNamingStrategy())));
        $instance->setQuoteStrategy(($this->privates['doctrine.orm.quote_strategy.default'] ?? ($this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy())));
        $instance->setEntityListenerResolver(($this->privates['doctrine.orm.default_entity_listener_resolver'] ?? ($this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))));
        $instance->setRepositoryFactory(($this->privates['doctrine.orm.container_repository_factory'] ?? $this->getDoctrine_Orm_ContainerRepositoryFactoryService()));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';

        return $this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /*
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

        return $this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /*
     * Gets the private 'doctrine.orm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Persistence\Mapping\Driver\MappingDriverChain
     */
    protected function getDoctrine_Orm_DefaultMetadataDriverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';

        $this->privates['doctrine.orm.default_metadata_driver'] = $instance = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $instance->addDriver(($this->privates['doctrine.orm.default_xml_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultXmlMetadataDriverService()), 'Emn\\CodeChallenge');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.default_xml_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver
     */
    protected function getDoctrine_Orm_DefaultXmlMetadataDriverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php';

        $this->privates['doctrine.orm.default_xml_metadata_driver'] = $instance = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver([(\dirname(__DIR__, 4).'/src/Infrastructure/Persistence/Doctrine/Mapping') => 'Emn\\CodeChallenge']);

        $instance->setGlobalBasename('mapping');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.naming_strategy.default' shared service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultNamingStrategy
     */
    protected function getDoctrine_Orm_NamingStrategy_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php';

        return $this->privates['doctrine.orm.naming_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultNamingStrategy();
    }

    /*
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/CacheWarmer/ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.orm.quote_strategy.default' shared service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultQuoteStrategy
     */
    protected function getDoctrine_Orm_QuoteStrategy_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';

        return $this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy();
    }

    /*
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CRNVQfE36S', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/CreateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/DropCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('JQHkbsYGE5', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDumpSchemaDoctrineCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsExecuteDoctrineCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsGenerateDoctrineCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsLatestDoctrineCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/MigrateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsMigrateDoctrineCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsRollupDoctrineCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand();

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/StatusCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsUpToDateDoctrineCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand();

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/VersionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsVersionDoctrineCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /*
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false);
    }

    /*
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Log\Logger
     */
    protected function getLoggerService()
    {
        return $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger();
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'routing.loader.annotation' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader
     */
    protected function getRouting_Loader_AnnotationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';

        return $this->privates['routing.loader.annotation'] = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'routing.loader.annotation.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader
     */
    protected function getRouting_Loader_Annotation_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['routing.loader.annotation.directory'] = new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /*
     * Gets the private 'routing.loader.annotation.file' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationFileLoader
     */
    protected function getRouting_Loader_Annotation_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['routing.loader.annotation.file'] = new \Symfony\Component\Routing\Loader\AnnotationFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /*
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    protected function getRouting_Loader_ContainerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';

        return $this->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'Emn\\CodeChallenge\\Infrastructure\\Symfony\\Kernel',
        ]));
    }

    /*
     * Gets the private 'routing.loader.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\DirectoryLoader
     */
    protected function getRouting_Loader_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'routing.loader.glob' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\GlobFileLoader
     */
    protected function getRouting_Loader_GlobService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['routing.loader.glob'] = new \Symfony\Component\Routing\Loader\GlobFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    protected function getRouting_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'routing.loader.xml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\XmlFileLoader
     */
    protected function getRouting_Loader_XmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'routing.loader.yml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['routing.loader.yml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getRouting_ResolverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';

        $this->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($this->privates['routing.loader.xml'] ?? $this->getRouting_Loader_XmlService()));
        $instance->addLoader(($this->privates['routing.loader.yml'] ?? $this->getRouting_Loader_YmlService()));
        $instance->addLoader(($this->privates['routing.loader.php'] ?? $this->getRouting_Loader_PhpService()));
        $instance->addLoader(($this->privates['routing.loader.glob'] ?? $this->getRouting_Loader_GlobService()));
        $instance->addLoader(($this->privates['routing.loader.directory'] ?? $this->getRouting_Loader_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.container'] ?? $this->getRouting_Loader_ContainerService()));
        $instance->addLoader(($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.directory'] ?? $this->getRouting_Loader_Annotation_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.file'] ?? $this->getRouting_Loader_Annotation_FileService()));

        return $instance;
    }

    /*
     * Gets the private 'secrets.local_vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault
     */
    protected function getSecrets_LocalVaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        return $this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local'));
    }

    /*
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    protected function getSecrets_VaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';

        return $this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'));
    }

    /*
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        return $this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0);
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, ($this->privates['session.storage.metadata_bag'] ?? ($this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0))));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the private 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    protected function getTest_Client_CookiejarService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/CookieJar.php';

        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /*
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    protected function getTest_Client_HistoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/browser-kit/History.php';

        return new \Symfony\Component\BrowserKit\History();
    }

    /*
     * Gets the private 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->privates['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]), $this->parameters['session.storage.options']);
    }

    /*
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'Emn_CodeChallenge_Infrastructure_Symfony_KernelProdContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'env(DATABASE_URL)' => '',
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'test.client.parameters' => [

            ],
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'OfferNewsletterDate' => [
                    'class' => 'Emn\\CodeChallenge\\Infrastructure\\Persistence\\Doctrine\\Types\\DoctrineOfferNewsletterDate',
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'Emn\\CodeChallenge\\Infrastructure\\Persistence\\Migrations',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.migrations_paths' => [

            ],
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'console.command.ids' => [
                0 => 'console.command.public_alias.Emn\\CodeChallenge\\Infrastructure\\Command\\OfferViewsCommand',
            ],
        ];
    }
}
