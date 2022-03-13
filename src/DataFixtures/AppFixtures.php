<?php

namespace App\DataFixtures;

use app\controller\controllerPanier;
use App\Entity\Film;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\DateTime;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $imgFilm=array("405662.jpg","438835.jpg","1878346.jpg","158304668971.jpg","i8zkqbcolkz4beousqkhrcf9ssj-868.jpg"
        );
        $nomFilm=array("Les Gardiens de la Galaxie","Les Gardiens de la Galaxie Vol. 2","La Ligne verte","Joker","Seul au monde"
        );
        $dateFilm=array("2014","2017","1999","2019","2000"
        );
        $synopsisFilm=array("Peter Quill est un aventurier traqué par tous les chasseurs de primes pour avoir volé un mystérieux globe convoité par le puissant Ronan, dont les agissements menacent l’univers tout entier. Lorsqu’il découvre le véritable pouvoir de ce globe et la menace qui pèse sur la galaxie, il conclut une alliance fragile avec quatre aliens disparates : Rocket, un raton laveur fin tireur, Groot, un humanoïde semblable à un arbre, l’énigmatique et mortelle Gamora, et Drax le Destructeur, qui ne rêve que de vengeance. En les ralliant à sa cause, il les convainc de livrer un ultime combat aussi désespéré soit-il pour sauver ce qui peut encore l’être …",
            "Après avoir affronté Ronan l'AccusateurN 1, les Gardiens de la Galaxie voyagent de planète en planète et y vendent leurs services. Ils vont découvrir la mystérieuse filiation de Star-Lord.",
            "En 1996, Paul Edgecomb, un ancien gardien-chef d'un pénitencier dans les années 1930, entreprend d'écrire ses mémoires. Il revient sur l'affaire de John Coffey — ce grand Noir au regard absent, condamné à mort pour le viol et le meurtre de deux fillettes — qui défraya la chronique de 1935.

Le pénitencier où travaille Paul est surnommé «la Ligne verte » : il s'agit du Cold Mountain, en Louisiane, là ou tous les condamnés à la chaise électrique passent leurs derniers jours.

Le jour d'arrivée de John Coffey (en octobre 1935), les gardiens sont très surpris par la taille du colosse, mais ils sont aussi très impressionnés qu'au fond de lui se cache un vrai cœur d'enfant.

Paul Edgecomb tient à ce que les prisonniers jouissent malgré tout d'un environnement paisible et humain. Percy Wetmore, nouveau gardien sous les ordres de Paul, perturbe cette organisation bien huilée, notamment par la cruauté et la perversité dont il fait preuve envers les détenus. Ainsi, pour passer ses nerfs, il frappe sauvagement son prisonnier souffre-douleur Édouard Delacroix et lui casse trois doigts. Mais ni Paul ni Hall Moores, le directeur du pénitencier, ne peuvent agir contre lui, car il est « protégé » par sa famille, en particulier sa tante, dont le mari est le gouverneur de Louisiane.

Une souris fait son apparition peu de temps après l'arrivée de John Coffey : elle sera désormais considérée par les gardiens comme un nouveau surveillant, que les surveillants au Bloc E apprécieront beaucoup. Après que Percy Wetmore a rencontré la souris et a voulu l'écraser (la souris a tout de même réussi à échapper à son dangereux ennemi), les gardiens ont pensé ne jamais la revoir, croyant qu'elle avait été effrayée par ce qu'a fait Percy Wetmore, mais les gardiens se trompent. Juste après l'exécution de Arlen Bitterbuck à la chaise électrique, la souris refait son apparition entre les bras du prisonnier Édouard Delacroix qui la considère à présent comme son animal de compagnie et la nomme Jingles.

Paul et son équipe vont chercher un prisonnier particulièrement dangereux, William Wharton — qui se surnomme lui-même Billy the Kid — condamné à la peine de mort pour le meurtre de trois personnes, dont une femme enceinte, dans un braquage. Quand ils le prennent en charge, William semble anéanti, probablement drogué par une forte dose de calmants. En réalité, il simule et en arrivant dans le bloc E, il se jette sournoisement sur le gardien Dean Stanton pour l'étrangler. Alors que Percy pourrait maîtriser William Wharton, il ne fait rien, de toute évidence tétanisé par sa lâcheté. Heureusement, les autres gardiens font preuve de plus de sang-froid et réussissent finalement à délivrer leur collègue et à maîtriser le nouveau venu grâce à Brutal.

Hall, ami intime de Paul, lui apprend que sa femme a une tumeur cérébrale, inopérable. Paul souffre quant à lui d'une infection urinaire qui, non seulement le fait terriblement souffrir, mais en plus met à mal sa vie de couple. Un jour, John le soigne d'une manière miraculeuse : il l'empoigne et pose sa main sur l'endroit atteint, puis recrache le « mal » sous forme de particules noires. John lui explique qu'il a ce don depuis tout petit, et qu'il ne sait pas d'où il vient.

William attrape Percy, profitant que celui-ci passe trop près des barreaux de sa cellule, et le menace de viol. Percy a tellement peur qu'il en mouille son pantalon sous le regard éberlué de ses collègues. Paul intervient. Percy les menace alors de tous les faire renvoyer grâce à ses relations, s'ils ébruitent la nouvelle.

Percy profite un jour d'écraser la souris Jingels. Mais John ressuscite l'animal, faisant preuve une seconde fois de ses pouvoirs surnaturels. En contrepartie, Paul fait jurer à Percy de demander sa mutation à l'hôpital psychiatrique de Briar Ridge dans un poste administratif. Percy accepte si Paul le laisse diriger la prochaine exécution.

Lors de l'exécution de Delacroix, Percy prend donc les commandes. Poussé par sa méchanceté perverse, il s'abstient de mouiller l'éponge qu'on pose habituellement sur le crâne des condamnés afin que la décharge électrique aille directement au cerveau et les tue le plus rapidement possible. Delacroix meurt finalement brûlé, en prenant feu dans sa cagoule carbonisée, après de très longues minutes d'une torture inhumaine provoquant l'indignation des témoins de l'exécution et la haine de tous ses collègues et l'immense douleur de John (qui, du fait de ses pouvoirs a ressenti toute la douleur de Delacroix). Percy est menacé d'aller à Briar Ridge au plus vite, avec un coup de poing dans la figure par Brutal, peu après l'exécution de Delacroix.

La maladie de la femme de Hall mettant en péril de plus en plus sévèrement sa vie, Paul a l'idée d'utiliser les pouvoirs de John Coffey pour la soigner. Paul, aidé par ses collègues qu'il a convaincus de l'innocence de Coffey, entreprend alors d'emmener John de nuit au chevet de la femme de Hall. Il pense bien à endormir Billy avec de la drogue forte et à enfermer Percy (qui refuse toujours d'aller à Briar Ridge) dans la cellule de contention, pour ne pas qu’il aille dénoncer Paul et les autres d'avoir envoyé un condamné à mort dans la maison de leurs boss et pour ce qu'il a fait à Delacroix.

Après tout cela, John, avec l'aide des gardiens, réussit à sortir de prison et à être emmené jusqu’au chevet de Hall pour aider Melinda. John guérit Melinda Moores sous les yeux de son mari, mais cette fois il ne recrache pas le « mal ». En effet, juste avant cette expédition, William Wharton a attrapé John par le bras à travers ses barreaux et ce contact a permis à Coffey d'avoir la révélation suivante : Wharton est coupable du double viol et assassinat pour lequel lui-même, Coffey, a été condamné (John avait été trouvé avec les corps sans vie des deux petites filles dans ses bras parce qu'il avait essayé d'utiliser son pouvoir pour les sauver). Ayant conservé en lui le « mal » de la femme de Hal Moores, John le transmet à Percy, qui tombe alors sous son contrôle et abat sauvagement Wharton en lui tirant dessus avec son arme à feu. Maîtrisé par ses collègues, Percy finit par recracher le « mal » mais ne s'en remettra pas. Il restera toute sa vie dans un état catatonique et finira à l'hôpital psychiatrique de Briar Ridge, non pas en tant qu'employé, comme prévu après l'exécution de Delacroix, mais en tant que patient, étant finalement puni pour sa méchanceté. Finalement, on peut dire que Percy a bien réalisé son rêve.

Paul ne peut se résoudre à l'idée d'exécuter John, qu'il sait dorénavant innocent, de manière indubitable. Il est hanté par l'idée du jugement dernier, celui au cours duquel il devra lui-même rendre compte de ses actes. La veille de son exécution, Paul et ses collègues demandent donc à John s'il veut qu'ils le fassent évader. Mais John refuse. Il déclare ressentir la haine de l'humanité, qui lui provoque des effets semblables à « des bourdonnements d'abeilles » ou des « bouts de verre dans la tête », ce qui lui procure une souffrance physique et morale atroce. Il pense que seule la mort peut le délivrer de ces maux. Brutal lui demande quand même ce qu'il voudrait qu'on fasse pour lui avant son exécution : John demande à voir un « film » car il n’en a jamais vu auparavant. John et les gardiens l'emmènent dans une salle de cinéma pour aller voir le film Top Hat, un grand film de 1935. Ça sera le dernier grand moment pour Paul avec John.

Sur la chaise électrique, John refuse la cagoule que l'on pose sur la tête des condamnés car il a peur du noir. Paul accepte cette dernière volonté et lui serre une dernière fois la main (celui-ci lui dit d'ailleurs par télépathie que « c'est comme ça partout dans le monde »). Tous les gardes ont les larmes aux yeux quand John quitte ce monde. Paul et ses collègues du bloc E n'accepteront plus jamais de tenir le rôle de bourreau. Paul et Brutal démissionnent et demandent leur mutation dans une maison pour jeunes délinquants, préférant dorénavant éduquer les enfants plutôt que d'avoir à les exécuter une fois devenus criminels.

Paul a maintenant 108 ans et est toujours en excellente santé — ce qui est présenté comme un effet secondaire du contact de John Coffey — et vit dans la maison de retraite Pines Georgia où il se lie d'amitié avec une patiente du nom d'Elaine. Un jour, Paul décide de lui en apprendre plus sur sa vie. Il l'emmène dans une cabane perdue dans les bois et lui montre Jingles, qui est encore vivante elle aussi et est resté nichée dans une boîte de cigares pendant plus de 60 ans.

Paul : « Si la souris a pu vivre aussi longtemps, combien d'années faudra-t-il que j'attende. Nous sommes tous promis à la mort, tous sans exception, mais pour certains, parfois, la Ligne verte semble bien longue. »

Paul n'a plus qu'à patienter que son heure vienne, tout en se demandant combien de temps il peut encore vivre.

",
        "L'histoire se déroule en 1981, à Gotham City. Arthur Fleck travaille dans une agence de clowns. Méprisé et incompris par ceux qui lui font face, il mène une morne vie en marge de la société et habite dans un immeuble miteux avec sa mère Penny. Un soir, il se fait agresser dans le métro par trois traders de Wayne Enterprise alcoolisés qui le brutalisent, le poussant à les tuer en retour. Son geste inspire à une partie de la population l'idée de s'en prendre eux aussi aux puissants. Dans cette société décadente, Arthur bascule peu à peu dans la folie et finit par devenir le Joker, un dangereux tueur psychopathe victime d'hallucinations et le plus grand criminel de Gotham City.",
            "Travaillant pour FedEx, Chuck Noland est appelé en urgence sur un vol, le soir de Noël, alors qu'il dînait avec sa fiancée et sa famille. Victime d'une grave avarie, l'avion cargo s'écrase et il est le seul à en réchapper. Il se retrouve sur une île déserte, entourée de barrières de corail infranchissables, dans l'océan Pacifique, où il doit apprendre à survivre. Tout au long de son séjour, qui dure plus de quatre ans, il entretiendra, pour tenir le coup, une amitié imaginaire avec un ballon de volley-ball, qu'il a nommé Wilson, issu de la cargaison de l'avion."
        );
        $dureeFilm=array("121","200","188","122","143"
        );
        $budgetFilm=array("170","200","60","55","90"
        );
        $genreFilm=array("Super-héros","Super-héros","Film dramatique,policier,fantastique","Thriller psycologique","Drame"
        );
        $realisateurFilm=array("James Gunn","James Gunn","Frank Darabont","Todd Phillips","Robert Zemeckis"
        );
        $nb=count($nomFilm);
        for($i=0;$i<$nb;$i++){
            $film=new Film($nomFilm[$i],null,$synopsisFilm[$i],$dureeFilm[$i],$budgetFilm[$i],$genreFilm[$i],$realisateurFilm[$i],$imgFilm[$i]);
            $manager->persist($film);
        }
        $admin=new User();
        $admin->setEmail("famillethomas64@gmail.com");
        $admin->setRoles(array("ROLE_ADMIN"));
        $pass="DttbcEb3NwrCvLk";
        $passHashed=password_hash($pass,PASSWORD_BCRYPT);
        $admin->setPassword("$passHashed");
        $admin->setNom("Yannis");
        $manager->persist($admin);


        $manager->flush();
    }
}
