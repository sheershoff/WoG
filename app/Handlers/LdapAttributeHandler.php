namespace App\Handlers;

use Adldap\Models\User;

class LdapAttributeHandler
{
    public function email(User $user)
    {
        return strtolower($user->getEmail());
    }
}