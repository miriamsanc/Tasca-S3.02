# Tasca S3.02. PATTERNS

Exercicis per a aprendre a utilitzar implementacions de patrons de disseny.

## Tecnologies 
- PHP

## Instal·lació
1. Clonar el repositori: git clone [Link](https://github.com/miriamsanc/Tasca-S3.02.git)

## Exercici 1: Singleton
Tens la següent definició de classe que pretén modelar al famós personatge de Tigger dels llibres "Winnie The Pooh" d'A A. Milne:

Arxiu: tigger.php

  class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }
  }

Sembla raonable esperar que només hi hagi un objecte Tigger (després de tot, ell és l'únic!), però la implementació actual permet tenir múltiples objectes Tigger diferents:

Refactoritzar la classe Tigger en un Singleton considerant els següents punts:

Defineix el mètode getInstance () que no tingui arguments. Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.
Imprimeix en pantalla múltiples vegades el rugit de Tigger.
Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits.

## Exercici 2: Dependency Injection
Imagina que ets una persona que està a punt de sortir de casa per anar a estudiar/treballar. Abans de sortir de casa necessitaràs portar la cartera, les claus de casa, potser les claus del cotxe/moto o la targeta del transport públic, i l'smartphone.

Fes una programa que simuli aquesta lògica fent servir el patró d'injecció de dependències.


