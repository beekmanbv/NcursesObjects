<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 14.08.14
 * Time: 22:04
 */

namespace wapmorgan\NcursesObjects;


class Colors
{
    protected static $pairs = [];

    const YELLOW = 1;
    const CYAN = 2;
    const WHITE = 3;
    const GREEN = 4;
    const RED = 5;
    const BLACK = 6;
    const BLUE = 7;
    const MAGENTA = 8;

    const YELLOW_BLACK = 9;
    const CYAN_BLACK = 10;
    const WHITE_BLACK = 11;
    const GREEN_BLACK = 12;
    const RED_BLACK = 13;
    const BLACK_BLACK = 14;
    const BLUE_BLACK = 15;
    const MAGENTA_BLACK = 16;

    const YELLOW_YELLOW = 17;
    const CYAN_YELLOW = 18;
    const WHITE_YELLOW = 19;
    const GREEN_YELLOW = 20;
    const RED_YELLOW = 21;
    const BLACK_YELLOW = 22;
    const BLUE_YELLOW = 23;
    const MAGENTA_YELLOW = 24;

    public static function initialize()
    {
        if (ncurses_has_colors()) {
            ncurses_start_color();
            ncurses_use_default_colors();

            ncurses_init_pair(self::YELLOW, NCURSES_COLOR_YELLOW, -1);
            ncurses_init_pair(self::CYAN, NCURSES_COLOR_CYAN, -1);
            ncurses_init_pair(self::WHITE, NCURSES_COLOR_WHITE, -1);
            ncurses_init_pair(self::GREEN, NCURSES_COLOR_GREEN, -1);
            ncurses_init_pair(self::RED, NCURSES_COLOR_RED, -1);
            ncurses_init_pair(self::BLACK, NCURSES_COLOR_BLACK, -1);
            ncurses_init_pair(self::BLUE, NCURSES_COLOR_BLUE, -1);
            ncurses_init_pair(self::MAGENTA, NCURSES_COLOR_MAGENTA, -1);

            ncurses_init_pair(self::YELLOW_BLACK, NCURSES_COLOR_YELLOW, NCURSES_COLOR_BLACK);
            ncurses_init_pair(self::CYAN_BLACK, NCURSES_COLOR_CYAN, NCURSES_COLOR_BLACK);
            ncurses_init_pair(self::WHITE_BLACK, NCURSES_COLOR_WHITE, NCURSES_COLOR_BLACK);
            ncurses_init_pair(self::GREEN_BLACK, NCURSES_COLOR_GREEN, NCURSES_COLOR_BLACK);
            ncurses_init_pair(self::RED_BLACK, NCURSES_COLOR_RED, NCURSES_COLOR_BLACK);
            ncurses_init_pair(self::BLACK_BLACK, NCURSES_COLOR_BLACK, NCURSES_COLOR_BLACK);
            ncurses_init_pair(self::BLUE_BLACK, NCURSES_COLOR_BLUE, NCURSES_COLOR_BLACK);
            ncurses_init_pair(self::MAGENTA_BLACK, NCURSES_COLOR_MAGENTA, NCURSES_COLOR_BLACK);

            ncurses_init_pair(self::YELLOW_YELLOW, NCURSES_COLOR_YELLOW, NCURSES_COLOR_YELLOW);
            ncurses_init_pair(self::CYAN_YELLOW, NCURSES_COLOR_CYAN, NCURSES_COLOR_YELLOW);
            ncurses_init_pair(self::WHITE_YELLOW, NCURSES_COLOR_WHITE, NCURSES_COLOR_YELLOW);
            ncurses_init_pair(self::GREEN_YELLOW, NCURSES_COLOR_GREEN, NCURSES_COLOR_YELLOW);
            ncurses_init_pair(self::RED_YELLOW, NCURSES_COLOR_RED, NCURSES_COLOR_YELLOW);
            ncurses_init_pair(self::BLACK_YELLOW, NCURSES_COLOR_BLACK, NCURSES_COLOR_YELLOW);
            ncurses_init_pair(self::BLUE_YELLOW, NCURSES_COLOR_BLUE, NCURSES_COLOR_YELLOW);
            ncurses_init_pair(self::MAGENTA_YELLOW, NCURSES_COLOR_MAGENTA, NCURSES_COLOR_YELLOW);
        }
    }


}
