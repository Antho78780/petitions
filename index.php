<!DOCTYPE HTML>
<html>
    <?php require("header.php") ?>
    <body>
        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary" bis_skin_checked="1">
                <div>
                    <h1 class="display-4 fst-italic">Titre de la pétition</h1>
                    <p class="lead my-3">Les bons de souscription de parts de créateur d'entreprise (BSPCE) sont des bons d’achat accordés à des salariés
                         (ou à des dirigeants d’entreprise) afin de leur permettre d’acheter des titres de la société durant une période fixée et à un prix déterminé peu élevé.
                        Cela donne l’entreprise le droit de payer leur salariés de façon différée. Il y a églament nombreux avantages pour les salariés. En vue de ces avantages,
                        le somme qui correspond à BSPCE est parfois très important. En revanche, parfois il y a une condition de présence qui est imposée. Cette condition de présence
                        peut être assez longue.
                        Différent d’un pourboire, on est souvent communiqué la somme représentée par ce dispositif lors de la signature de contrat. Il est même inscrit dans le 
                        contrat et la somme est très importante.
                        Il y a une limitation avec le loi actuelle sans règlementer plus. C’est que l’importance de BSPCE peut beaucoup stimuler les salariés pour travailler
                        beaucoup pendant une longue période, mais finalement à cause la condition de présence les entreprises peuvent faire partir
                        les salariés avant la première échéance sans payer cette rénumération importante prédéfinies. La conséquence est que les salariés peut beaucoup travailler pour rien gagner correspondemment.
                        La reglementation concernant la condition de présence existe pour par exemple le plan de participation de d’intéressement,
                        qui limite la condition de présence à 3 mois maximum. Les deux plans sont également plafonnés.
                        Néanmoins, il n’y a pas de règlementation clairement définies pour BSPCE, qui donne potentiellement le droit aux entreprises de ne pas payer
                        une somme importante aux salariés, qui pourrait confondre les salariés dans le secteur privé et les auto-entrepreneurs/chef d’entreprise.
                        Hormis la condition de présence, lorsqu’une entreprise privée est à taille limitée, le prix du marché d’action de l’entreprise pourrait être peu
                        liquide pendant longtemps et en même temps très influencé par le conseil d’administration qui est composé de seulement quelques personnes
                        qui sont des actionnaires majoritaires. Cela donne la possibilité au conseil d’administration de décider payer qui à combien à tout moment
                        à leur seule discrétion indépendamment de la performance de l’entreprise, car le prix du marché d’action sous-jacent depend des volontés
                        des acheteurs et des volontés des vendeurs. Cela est donc potentiellement un dispositif de paiement à volonté pour un somme très important
                        aux salariés dans le secteur privé, qui doit être règlementé plus loins comme pour les salaires de base.
                    </p>
                </div>
            </div>
        </main>
        <form action="traitement.php" method="POST" class="w-25 container">
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="prenom" placeholder="prenom">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nom" placeholder="nom">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Envoyer</button>
        </form>
    </body>
</html>

