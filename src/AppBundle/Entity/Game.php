<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class Game
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
     * @ORM\OneToOne(targetEntity="Stadium")
     * @ORM\JoinColumn(name="stadium_id", referencedColumnName="id")
     */
    private $stadium;
    
    /**
     * @ORM\OneToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="away_team_id", referencedColumnName="id")
     */
    private $awayTeam;
    
    /**
     * @ORM\OneToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="home_team_id", referencedColumnName="id")
     */
    private $homeTeam;

    /**
     * @var float
     *
     * @ORM\Column(name="line", type="float")
     */
    private $line;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite", type="string", length=255)
     */
    private $favorite;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var float
     *
     * @ORM\Column(name="total_scored", type="float")
     */
    private $totalScored;

    /**
     * @var float
     *
     * @ORM\Column(name="home_score", type="float")
     */
    private $homeScore;

    /**
     * @var float
     *
     * @ORM\Column(name="away_score", type="float")
     */
    private $awayScore;


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
     * @return Game
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
     * Set line
     *
     * @param float $line
     *
     * @return Game
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return float
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Game
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set favorite
     *
     * @param array $favorite
     *
     * @return Game
     */
    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;

        return $this;
    }

    /**
     * Get favorite
     *
     * @return array
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * Set state
     *
     * @param array $state
     *
     * @return Game
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return array
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set totalScored
     *
     * @param float $totalScored
     *
     * @return Game
     */
    public function setTotalScored($totalScored)
    {
        $this->totalScored = $totalScored;

        return $this;
    }

    /**
     * Get totalScored
     *
     * @return float
     */
    public function getTotalScored()
    {
        return $this->totalScored;
    }

    /**
     * Set homeScore
     *
     * @param float $homeScore
     *
     * @return Game
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = $homeScore;

        return $this;
    }

    /**
     * Get homeScore
     *
     * @return float
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * Set awayScore
     *
     * @param float $awayScore
     *
     * @return Game
     */
    public function setAwayScore($awayScore)
    {
        $this->awayScore = $awayScore;

        return $this;
    }

    /**
     * Get awayScore
     *
     * @return float
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * Set stadium
     *
     * @param \AppBundle\Entity\Stadium $stadium
     *
     * @return Game
     */
    public function setStadium(\AppBundle\Entity\Stadium $stadium = null)
    {
        $this->stadium = $stadium;

        return $this;
    }

    /**
     * Get stadium
     *
     * @return \AppBundle\Entity\Stadium
     */
    public function getStadium()
    {
        return $this->stadium;
    }

    /**
     * Set awayTeam
     *
     * @param \AppBundle\Entity\Team $awayTeam
     *
     * @return Game
     */
    public function setAwayTeam(\AppBundle\Entity\Team $awayTeam = null)
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    /**
     * Get awayTeam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * Set homeTeam
     *
     * @param \AppBundle\Entity\Team $homeTeam
     *
     * @return Game
     */
    public function setHomeTeam(\AppBundle\Entity\Team $homeTeam = null)
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }
}
