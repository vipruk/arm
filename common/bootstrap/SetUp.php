<?php

namespace common\bootstrap;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use League\Flysystem\Adapter\Ftp;
use League\Flysystem\Filesystem;
use shop\cart\Cart;
use shop\cart\cost\calculator\DynamicCost;
use shop\cart\cost\calculator\SimpleCost;
use shop\cart\storage\HybridStorage;
use shop\dispatchers\AsyncEventDispatcher;
use shop\dispatchers\DeferredEventDispatcher;
use shop\dispatchers\EventDispatcher;
use shop\dispatchers\SimpleEventDispatcher;
use shop\entities\behaviors\FlySystemImageUploadBehavior;
use shop\entities\Shop\Product\events\ProductAppearedInStock;
use shop\jobs\AsyncEventJobHandler;
use shop\listeners\Shop\Category\CategoryPersistenceListener;
use shop\listeners\Shop\Product\ProductAppearedInStockListener;
use shop\listeners\Shop\Product\ProductSearchPersistListener;
use shop\listeners\Shop\Product\ProductSearchRemoveListener;
use shop\listeners\User\UserSignupConfirmedListener;
use shop\listeners\User\UserSignupRequestedListener;
use shop\repositories\events\EntityPersisted;
use shop\repositories\events\EntityRemoved;
use shop\services\newsletter\MailChimp;
use shop\services\newsletter\Newsletter;
use shop\services\sms\LoggedSender;
use shop\services\sms\SmsRu;
use shop\services\sms\SmsSender;
use shop\services\yandex\ShopInfo;
use shop\services\yandex\YandexMarket;
use shop\entities\User\events\UserSignUpConfirmed;
use shop\entities\User\events\UserSignUpRequested;
use shop\useCases\ContactService;
use yii\base\BootstrapInterface;
use yii\base\ErrorHandler;
use yii\caching\Cache;
use yii\di\Container;
use yii\di\Instance;
use yii\mail\MailerInterface;
use yii\rbac\ManagerInterface;
use yii\queue\Queue;
use yiidreamteam\upload\ImageUploadBehavior;

class SetUp implements BootstrapInterface
{
    public function bootstrap($app): void
    {
        $container = \Yii::$container;


    }
}