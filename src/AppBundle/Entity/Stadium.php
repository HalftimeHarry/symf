<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stadium
 *
 * @ORM\Table(name="stadium")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StadiumRepository")
 */
class Stadium
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
        /**
     * @var string
     *
     * @ORM\Column(name="season", type="string", length=255)
     */
    private $season;
    
        /**
     * @var string
     *
     * @ORM\Column(name="week", type="string", length=255)
     */
    private $week;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=255)
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="imported_score", type="string", length=255)
     */
    private $importedScore;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imported_score_two", type="string", length=255)
     */
    private $importedScoreTwo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imported_score_three", type="string", length=255)
     */
    private $importedScoreThree;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imported_score_four", type="string", length=255)
     */
    private $importedScoreFour;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imported_score_five", type="string", length=255)
     */
    private $importedScoreFive;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imported_score_six", type="string", length=255)
     */
    private $importedScoreSix;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imported_score_seven", type="string", length=255)
     */
    private $importedScoreSeven;

    /**
     * @var int
     *
     * @ORM\Column(name="calculated_score", type="integer")
     */
    private $calculatedScore;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Stadium
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surface
     *
     * @param string $surface
     *
     * @return Stadium
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set importedScore
     *
     * @param string $importedScore
     *
     * @return Stadium
     */
    public function setImportedScore($importedScore)
    {
        $this->importedScore = $importedScore;

        return $this;
    }

    /**
     * Get importedScore
     *
     * @return string
     */
    public function getImportedScore()
    {
        return $this->importedScore;
    }

    /**
     * Set importedScoreTwo
     *
     * @param string $importedScoreTwo
     *
     * @return Stadium
     */
    public function setimportedScoreTwo($importedScoreTwo)
    {
        $this->importedScoreTwo = $importedScoreTwo;

        return $this;
    }

    /**
     * Get importedScoreTwo
     *
     * @return string
     */
    public function getimportedScoreTwo()
    {
        return $this->importedScoreTwo;
    }
    
    /**
     * Set importedScoreThree
     *
     * @param string $importedScoreThree
     *
     * @return Stadium
     */
    public function setimportedScoreThree($importedScoreThree)
    {
        $this->importedScoreThree = $importedScoreThree;

        return $this;
    }

    /**
     * Get importedScoreThree
     *
     * @return string
     */
    public function getimportedScoreThree()
    {
        return $this->importedScoreThree;
    }
	
    /**
     * Set importedScoreFour
     *
     * @param string $importedScoreFour
     *
     * @return Stadium
     */
    public function setimportedScoreFour($importedScoreFour)
    {
        $this->importedScoreFour = $importedScoreFour;

        return $this;
    }

    /**
     * Get importedScoreFour
     *
     * @return string
     */
    public function getimportedScoreFour()
    {
        return $this->importedScoreFour;
    }
	
    /**
     * Set importedScoreFive
     *
     * @param string $importedScoreFive
     *
     * @return Stadium
     */
    public function setimportedScoreFive($importedScoreFive)
    {
        $this->importedScoreFive = $importedScoreFive;

        return $this;
    }

    /**
     * Get importedScoreFive
     *
     * @return string
     */
    public function getimportedScoreFive()
    {
        return $this->importedScoreFive;
    }
	
    /**
     * Set importedScoreSix
     *
     * @param string $importedScoreSix
     *
     * @return Stadium
     */
    public function setimportedScoreSix($importedScoreSix)
    {
        $this->importedScoreSix = $importedScoreSix;

        return $this;
    }

    /**
     * Get importedScoreSix
     *
     * @return string
     */
    public function importedScoreSix()
    {
        return $this->importedScoreSix;
    }
	
    /**
     * Set importedScoreSeven
     *
     * @param string $importedScoreSeven
     *
     * @return Stadium
     */
    public function setimportedScoreSeven($importedScoreSeven)
    {
        $this->importedScoreSeven = $importedScoreSeven;

        return $this;
    }

    /**
     * Get importedScoreSeven
     *
     * @return string
     */
    public function importedScoreSeven()
    {
        return $this->importedScoreSeven;
    }
	

    /**
     * Set calculatedScore
     *
     * @param integer $calculatedScore
     *
     * @return Stadium
     */
    public function setCalculatedScore($calculatedScore)
    {
        $this->calculatedScore = $calculatedScore;

        return $this;
    }

    /**
     * Get calculatedScore
     *
     * @return int
     */
    public function getCalculatedScore()
    {
        return $this->calculatedScore;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Stadium
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set week
     *
     * @param string $week
     *
     * @return Stadium
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return string
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Get importedScoreSix
     *
     * @return string
     */
    public function getImportedScoreSix()
    {
        return $this->importedScoreSix;
    }

    /**
     * Get importedScoreSeven
     *
     * @return string
     */
    public function getImportedScoreSeven()
    {
        return $this->importedScoreSeven;
    }
}
