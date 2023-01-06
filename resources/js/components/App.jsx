import React from "react";
import { Fragment, useState } from 'react'
import { Route, Routes, useNavigate } from 'react-router-dom'
import { setupResponseInterceptor } from './HttpClient'
import Bayer from './Bayer.create';
import DictonaryList from "./Dictonary.list";

function App() {
    const navigate = useNavigate()
    const [isLoaded, setIsLoaded] = useState(false)

    if (!isLoaded) {
        setIsLoaded(true)
        setupResponseInterceptor(navigate)
       
    }

    return (

       <div>
        <Bayer />
       </div>

    )
}

export default App

