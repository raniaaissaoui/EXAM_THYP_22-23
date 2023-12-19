def compter_occurrences_mots(nom_fichier):
    try:
        with open(nom_fichier, 'r') as fichier:
            contenu = fichier.read()

            # Divise le contenu en mots
            mots = contenu.split()

            # Initialise un dictionnaire pour stocker le nombre d'occurrences de chaque mot
            occurrences_mots = {}

            # Compte le nombre d'occurrences de chaque mot
            for mot in mots:
                mot = mot.lower()  # Convertit le mot en minuscules pour éviter la casse
                mot = mot.strip('.,!?()[]{}":;')  # Supprime la ponctuation
                if mot:
                    occurrences_mots[mot] = occurrences_mots.get(mot, 0) + 1

            # Affiche les résultats
            print("Occurrences des mots dans le fichier :")
            for mot, occurrences in occurrences_mots.items():
                print(f"{mot}: {occurrences}")

    except FileNotFoundError:
        print(f"Le fichier '{nom_fichier}' est introuvable.")
    except Exception as e:
        print(f"Une erreur s'est produite : {e}")

if _name_ == "_main_":
    nom_fichier = input("Entrez le nom du fichier texte : ")
    compter_occurrences_mots(nom_fichier)