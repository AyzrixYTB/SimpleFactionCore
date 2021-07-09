# SimpleFactionCore

###### SimpleFactionCore is a plugin implementing all the basic functions of a faction in one single plugin.

## Commands

| Command Name   | Command Description                                      | Permission                        |
|----------------|----------------------------------------------------------|---------------------------------------|
| /feed | Feed yourself | sfc.feed |
| /heal | Heal yourself | sfc.heal |
| /back | Teleport yourself to your last death position | sfc.back |


## Additional plugins
| Name              | Usage                         | Download                                                          |
|-------------------|-------------------------------|-------------------------------------------------------------------|
| Scoreboard        | Scoreboard integration        | [Download](https://poggit.pmmp.io/p/Scoreboard) |
| SimpleFaction        | Faction system                   | [Download](https://poggit.pmmp.io/p/SimpleFaction)                   |

## Contributors

## Config
```yaml
back_description: "Se téléporter à l'endroit de votre dernière mort"
heal_descritpion: "Se soigner"
feed_description: "Se nourrir"

back_success: "§aVous avez été téléporté à votre dernière mort avec succès."
feed_success: "§aVous avez été nourris avec succès."
heal_success: "§aVous avez été soigné avec succès."

back_notfound: "§cVous n'avez aucune mort récente."
not_permission: "§cVous n'avez pas la permission d'utiliser cette commande."
not_player: "Cette commande n'est pas utilisable par la console."
```