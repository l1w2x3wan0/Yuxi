<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/23
 * Time: 17:48
 */
//factory
interface IUser
{
    public function getPower();
}

class SuperUser implements  IUser
{
    public function getPower()
    {
        echo "I'm Superman" . PHP_EOL;
    }
}

class CommonUser implements IUser
{
    public function getPower()
    {
        echo "I'm commonUser" . PHP_EOL;
    }
}

abstract class AUserFactory
{
    public abstract function createUser($user);
}

class UserFactory extends AUserFactory
{
    public function createUser($user)
    {
        try {
            if (class_exists($user)) {
                return new $user();
            } else {
                $err = 'no this class:' . $user . PHP_EOL;
                throw new Exception($err);
                exit;
            }
        } catch (Exception $e) {
            echo 'Caught exception ' . $e->getMessage() . PHP_EOL;
            exit;
        }
    }
}


$userFactory = new UserFactory();
$userFactory->createUser('SuperUser')->getPower();
$userFactory->createUser('CommonUser')->getPower();
$userFactory->createUser('errUser')->getPower();
exit;



//simple Factory
class Game
{
    private $name;
    private $model;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getModel()
    {
        return $this->model;
    }
}

class CreateGame
{
    public static function FactoryGame($name, $model)
    {
        return new Game($name, $model);
    }
}

$game = CreateGame::FactoryGame('renrenmajiang', 'mobile');
print($game->getName() . '--' . $game->getModel() . PHP_EOL);




class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"