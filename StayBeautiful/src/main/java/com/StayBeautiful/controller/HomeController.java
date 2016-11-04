package com.StayBeautiful.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

/**
 * Created by deepi on 11/4/2016.
 */

@Controller
public class HomeController {

    @RequestMapping("/")
    public String home()
    {
        return "home";
    }

}
