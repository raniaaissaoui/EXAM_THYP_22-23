function sommeTableau(nombres: number[]): number {
    // Utilisation de la fonction reduce pour calculer la somme
    return nombres.reduce((total, nombre) => total + nombre, 0);
}

// Exemple d'utilisation de la fonction
const tableauDeNombres: number[] = [1, 2, 3, 4, 5];
const resultatSomme: number = sommeTableau(tableauDeNombres);
console.log(resultatSomme); // Ceci affichera 15 dans la console
