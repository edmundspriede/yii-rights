<?php
/**
* French translation for Rights core.
*
* Please contact the author if you find an error in the translation.
*
* @author Raoul <manu34@free.fr>
* @copyright Copyright © 2010 Raoul
* @since 0.9.9
*/
return array(
	/**
	* components/Rights.php
	*/
	'Operation'=>'Opération',
	'Task'=>'Tâche',
	'Role'=>'Rôle',
	'Invalid authorization item type.'=>'Type d\'élément d\'autorisation invalide.',
	/**
	* controllers/AssignmentController.php
	*/
	':name assigned.'=>':name assigné.',
	':name revoked.'=>':name revoqué.',
	'Invalid request. Please do not repeat this request again.'=>'Requête invalide. Veuillez ne pas renouveler cette requête.',
	'You are not authorized to perform this action.'=>'Vous n\'êtes pas autorisé à effectuer cette action.',
	/**
	* controllers/AuthItemController.php
	*/
	':name created.'=>':name créé.',
	':name updated.'=>':name modifié.',
	'Child :name added.'=>'Enfant :name ajouté.',
	'Child :name removed.'=>'Enfant :name supprimé.',
	':name deleted.'=>':name effacé.',
	'Authorization items created.'=>'Eléments d\'autorisation créés.',
	'The requested page does not exist.'=>'La page demandé n\'existe pas.',
	/**
	* models/AuthItemForm.php
	*/
	'An item with this name already exists.'=>'Un élément avec le même nom existe déjà.',
	/**
	* views/default/(_)permissions.php
	*/
	'Permissions'=>'Permissions',
	'Permission'=>'Permission', // FIXME: Translate
	'Revoke'=>'Revoquer',
	'Inherited'=>'Hérité',
	'Assign'=>'Assigner',
	'Hover to see from where the permission is inherited.'=>'Survoler pour voir d\'où est hérité la permission.',
	'Parents'=>'Parents',
	'No authorization items found.'=>'Aucun élément d\'autorisation trouvé.',
	/**
	* views/default/operations.php
	*/
	'Operations'=>'Opérations',
	'Create a new operation'=>'Créer une nouvelle opération',
	'Name'=>'Nom',
	'Description'=>'Description', // FIXME: Translate
	'Business rule'=>'Règle métier',
	'Data'=>'Donnée',
	'Delete'=>'Effacer',
	'Are you sure you want to delete this operation?'=>'Etes-vous sûr de vouloir effacer cette opération?',
	'Values within square brackets tell how many children each item has.'=>'Les valeurs entre crochets indiquent le nombre d\'enfants dont dispose l\'élément.',
	'No operations found.'=>'Aucune opération trouvée.',
	/**
	* views/default/tasks.php
	*/
	'Tasks'=>'Tâches',
	'Create a new task'=>'Créer une nouvelle tâche',
	'Are you sure you want to delete this task?'=>'Etes-vous sûr de vouloir effacer cette tâche?',
	'No tasks found.'=>'Aucune tâche trouvée.',
	/**
	* views/default/roles.php
	*/
	'Roles'=>'Rôles',
	'Create a new role'=>'Créer un nouveau rôle',
	'superuser'=>'superutilisateur',
	'Are you sure you want to delete this role?'=>'Etes-vous sûr de vouloir effacer ce rôle?',
	'No roles found.'=>'Aucun rôle trouvé.',
	/**
	* views/authItem/authChildForm.php
	*/
	'Add'=>'Ajouter',
	/**
	* views/authItem/authItemForm.php
	*/
	'Save'=>'Sauver',
	/**
	* views/authItem/_generateItems.php
	*/
	'Modules'=>'Modules', // FIXME: Translate
	/**
	* views/authItem/create.php
	*/
	'Create :type'=>'Créer :type',
	/**
	* views/authItem/generate.php
	*/
	'Auth Item Generator'=>'Générateur d\'éléments d\'autorisation',
	'Please select which authorization items you wish to generate.'=>'Veuillez sélectionner le type d\'élément d\'autorisation à générer.',
	'Application'=>'Application', // FIXME: Translate
	'Select all'=>'Tout sélectionner',
	'Select none'=>'Ne rien sélectionner',
	'Generate'=>'Générer',
	/**
	* views/authItem/update.php
	*/
	'Auth Item'=>'Elément Auth',
	'Update :name'=>'Modifier :name',
	'Relations'=>'Relations',
	'This item has no parents.'=>'Cet élément n\'a pas de parent.',
	'Children'=>'Enfants',
	'Remove'=>'Supprimer',
	'This item has no children.'=>'Cet élément n\'a pas d\'enfant.',
	'Add Child'=>'Ajouter Enfant',
	'No relations need to be set for the superuser role.'=>'Aucune relation ne doit être créée pour le rôle superutilisateur.',
	'Super users are always granted access implicitly.'=>'Les supers utilisateurs ont toujours un accès implicite.',
	/**
	* views/assignment/user.php
	*/
	'Assignments for :username'=>'Assignation pour :username',
	'This user has not been assigned any authorization items.'=>'Aucun élément d\'autorisation n\'a été assigné à cet utilisateur.',
	'Add Assignment'=>'Ajouter assignation',
	/**
	* views/assignment/view.php
	*/
	'Assignments'=>'Assignations',
	'Username'=>'Utilisateur',
	'No users found.'=>'Aucun utilisateur trouvé.',
	/**
	* views/_menu.php
	*/
	'Generator'=>'Générateur',
);
