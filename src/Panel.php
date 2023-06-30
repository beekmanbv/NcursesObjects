<?php

namespace wapmorgan\NcursesObjects;

/**
 * A panel object that implements functionality for ncurses panel resource
 * @author wapmorgan (wapmorgan@gmail.com)
 */
class Panel extends Window
{
    /**
     * Associated Window
     */
    private $window;
    /**
     * Ncurses panel resource
     */
    private $panelResource;

    /**
     * Constructor
     * @param  Window A window to associate
     */
    public function __construct($columns = 0, $rows = 0, $x = 0, $y = 0)
    {
        parent::__construct($columns, $rows, $x, $y);
        $this->panelResource = ncurses_new_panel($this->getWindow());
    }

    /**
     * Shows a panel
     * @return Panel This object
     */
    public function show()
    {
        ncurses_show_panel($this->panelResource);
        return $this;
    }

    /**
     * Hides a panel
     * @return Panel This object
     */
    public function hide()
    {
        ncurses_hide_panel($this->panelResource);
        return $this;
    }

    /**
     * Puts a panel on the top
     * @return Panel This object
     */
    public function putOnTop()
    {
        ncurses_top_panel($this->panelResource);
        return $this;
    }

    /**
     * Puts a panel on the bottom
     * @return Panel This object
     */
    public function putOnBottom()
    {
        ncurses_bottom_panel($this->panelResource);
        return $this;
    }
}
