namespace App\Repositories;


use App\Repositories\Interface\PrivatePropertiesRepositoryInterface;
use App\PrivateProperties;


class PrivatePropertiesRepositories implements PrivatePropertiesRepositoryInterface
{
    public $private_properties;


    function __construct(PrivateProperties $private_properties) {
	    $this->private_properties = $private_properties;
    }

}