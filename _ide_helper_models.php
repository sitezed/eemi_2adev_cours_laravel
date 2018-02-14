<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Eemi{
/**
 * Eemi\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $civilite
 * @property int $status
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereCivilite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace Eemi{
/**
 * Eemi\Article
 *
 * @property int $id
 * @property int $user_id
 * @property string $titre
 * @property string|null $resume
 * @property string|null $contenu
 * @property string|null $photo_principale
 * @property string $categorie
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Eemi\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereCategorie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereContenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article wherePhotoPrincipale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereTitre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Article whereUserId($value)
 */
	class Article extends \Eloquent {}
}

namespace Eemi{
/**
 * Eemi\Produit
 *
 * @property int $id
 * @property string|null $titre
 * @property string $reference
 * @property string|null $slug
 * @property string|null $photo
 * @property float|null $prix
 * @property int|null $quantite
 * @property string|null $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereQuantite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereTitre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Eemi\Produit whereUpdatedAt($value)
 */
	class Produit extends \Eloquent {}
}

