<?php
/* Contexte :
Une agence digitale gère des projets composés de tâches. Chaque tâche a une durée estimée.
Le chef de projet veut calculer le budget total d'un projet en se basant sur les heures estimées,
en ajoutant une marge de 10% pour les imprévus. Il veut aussi pouvoir lister les tâches
dépassant un certain seuil d'heures.
Structure des classes :
• class Task { private $id; private $description; private $estimatedHours; }
• class Project { private $title; private $dailyRate; private $tasks = []; }
• → Task : constructeur + getters + méthode isBig($threshold) qui retourne
true si estimatedHours > $threshold
• → Project : constructeur + addTask(Task $task) + getter $tasks
• → Project : calculateTotalHours() — somme des heures de toutes les
tâches
• → Project : calculateTotalWithBuffer($bufferPercent = 10) — total * (1 +
buffer/100)
• → Project : calculateBudget() — totalHeures * dailyRate / 8 (taux
journalier / 8h)
• → Project : getBigTasks($threshold) — retourne un tableau des tâches
dont isBig() est true 
===============================================================================================
Travail demandé :
1. Créez la classe Task avec ses 3 attributs private, son constructeur, ses getters et la
méthode isBig($threshold)*/
class Task
{
    private $id;
    private $description;
    private $estimatedHours;

    public function __construct($id, $description, $estimatedHours)
    {
        $this->id = $id;
        $this->description = $description;
        $this->estimatedHours = $estimatedHours;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getEstimatedHours()
    {
        return $this->estimatedHours;
    }
    public function isBig($threshold)
    {
        if ($this->estimatedHours > $threshold) {
            return true;
        }
    }
}
/*2. Créez la classe Project avec $title, $dailyRate (taux journalier), $tasks (tableau vide par
défaut)*/
class Project
{
    private $title;
    private $dailyRate;
    private $tasks = [];
    /* 3. Implémentez addTask(Task $task) : ajoute la tâche au tableau $tasks */
    public function addTask(Task $task)
    {
        $this->tasks[] = $task;
    }
    /* 4. Implémentez calculateTotalHours() : parcourt $tasks avec foreach et additionne les heures */
    public function calculateTotalHours()
    {
        $totalHours = 0;
        foreach ($this->tasks as $task) {
            $totalHours += $task->getEstimatedHours();
        }
        return $totalHours;
    }
    /* 5. Implémentez calculateTotalWithBuffer($bufferPercent = 10) : retourne les heures + la marge en % */
    public function  calculateTotalWithBuffer($bufferPercent = 10)
    {

        $total = $this->calculateTotalHours();
        return $total * (1 + $bufferPercent / 100);
    }
    /* 6. Implémentez calculateBudget() : heures totales avec buffer × (dailyRate / 8) */
    public function calculateBudget()
    {
        $totalBuffer = $this->calculateTotalWithBuffer(10);
        $totalHours = $this->calculateTotalHours();
        $res = $totalHours + $totalBuffer * ($this->dailyRate / 8);
        return $res;
    }
    /* 7. Implémentez getBigTasks($threshold) : retourne un tableau filtré des tâches dépassant le seuil */
    public function getBigTasks($threshold)
    {
        return array_filter($this->tasks, fn($task) => $task->isBig($threshold));
    }
}
/*  8. Testez avec un projet 'Refonte site web' (600€/jour), 3 tâches : 'Design' 12h, 'Dev front' 30h, 'Dev back' 45h */
$tache1 = new Task(1, 'Design', 12);
$tache2 = new Task(2, 'Dev front', 30);
$tache3 = new Task(3, 'Dev back', 45);
$project1 = new Project();
$project1->addTask($tache1);
$project1->addTask($tache2);
$project1->addTask($tache3);
/* Affichez : total heures */
echo ($project1->calculateTotalHours());
echo "\n";
/* Affichez : total heures  avec buffer*/
echo ($project1->calculateTotalWithBuffer(10));
echo "\n";
/* Affichez : budget estimé*/
echo ($project1->calculateBudget());
echo "\n";
/* Affichez : taches > 20*/
echo ($project1->getBigTasks(20));
