import Link from 'next/link';
import React from 'react';

const NavBar = () => {
    return (
        <div>
            <ul>
                <li>
                    <Link href='/'>Home</Link>
                    <Link href='/product'>Product</Link>                    
                </li>
            </ul>
        </div>
    );
};

export default NavBar;