<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 22:53
 */
class AdminVIEW
{
    private $model;

    /**
     * AdminVIEW constructor.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __showTab()
    {

        echo "<div id='tabAdmin'>

            <table>
              <tr>
                <th colspan=\"2\">Adminstrateur :</th>
              </tr>
              <tr>
                <td>
                <a href='index.php?page=Template' class='link-admin'>
                    <img src='assets/image/admin/template.png' width='150px' height='150px'>
                    <p>Gestion Template</p>
                </a>
                </td>
                <td>
                <a href='index.php?page=Contenu' class='link-admin'>
                    <img src='assets/image/admin/contenu.png' width='150px' height='150px'>
                    <p>Gestion Du Contenu</p>
                </a>
                </td>
              </tr>
              <tr>
                <td>
                <a href='index.php?page=User' class='link-admin'>
                    <img src='assets/image/admin/UserIcons.png' width='150px' height='150px'>
                    <p>Gestion des Utilisateurs</p>
                </a>
                </td>
                <td>
                <a href='index.php?page=Commentaire' class='link-admin'>
                    <img src='assets/image/admin/commentpg.png' width='150px' height='150px'>
                    <p>Gestion des Commentaire</p>
                </a>
                </td>
              </tr>
            </table>

        </div>


        ";

    }


}