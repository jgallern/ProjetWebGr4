# Projet Web groupe 4

Dépot git de notre groupe de projet Web constitué de:

- Quentin B
- Gauthier W
- Mohammed EO
- Jules G

## Git Workflow

Un workflow git est le mode d'emploi qui encadre l'utilisation du git dans le but de réaliser notre travail d'une manière organisée et productive.

### Dépôt principal (upstream) :

Nous optons pour un dépôt centralisé sur Github:
https://github.com/jgallern/ProjetWebGr4
Nous allons nous baser sur la méthode "gitflow workflow"

Chaque membre clone le dépôt sur leur machine locale.
`git clone https://github.com/jgallern/ProjetWebGr4.git`

### Branches :

- main (ou master) : Cette branche représente la version stable du projet. Aucun développement direct n'est effectué sur cette branche.
- develop : Branche de développement où les fonctionnalités sont intégrées avant d'être fusionnées dans la branche principale.
- Branches de fonctionnalités : Chaque fonctionnalité ou tâche peut avoir sa propre branche. Par exemple, feature/login pour une fonctionnalité de connexion. Supprimer les branches fonctionnalités quand elles ne sont plus utiles.

### Workflow de développement :

- Chaque membre travaille sur sa propre branche pour développer une fonctionnalité ou résoudre un problème.
- On commence par se mettre à jour avec la branche develop pour éviter les conflits inutiles : `git pull origin develop`.
- On effectue les changements, on les committe régulièrement sur la branche branche de la fonctionnalité sur laquelle on travaille.
- Une fois que la fonctionnalité est prête, on effectue une demande de fusion (Pull Request) vers la branche develop.

### Revue de code :

- Les Pull Requests sont examinées par les pairs pour garantir la qualité du code.
- Les commentaires et les corrections sont discutés et résolus avant la fusion.

### Déploiement :

- Une fois que la branche develop atteint un état stable, elle peut être fusionnée dans la branche principale (main ou master).

### Gestion des versions :

- Utiliser les DVCS ( Distributed Version Control Systems) de git.
  [explication des différents type de gestion des versions](https://git-scm.com/book/fr/v2/D%C3%A9marrage-rapide-%C3%80-propos-de-la-gestion-de-version)

### Résolution de conflits :

- En cas de conflits lors de la fusion, ils doivent être résolus avant de pouvoir fusionner avec la branche cible.

### Communication :

- Communique régulièrement sur les changements effectués et les problèmes rencontrés.

Moyens: en vrai si à l'école / serveur Discord du groupe sinon. Garder trace écrites des décision faites dans les deux cas.

### Documentation :

- Documenter le code avec des commentaires.
