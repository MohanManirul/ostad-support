import Image from 'next/image';
import React from 'react';

const page = () => {
    return (
        <div>
            <p>Product page</p>

            
            <Image 
                alt='Phonef'
                width={200}
                height={300}
                src="https://cdn.britannica.com/09/241709-050-149181B1/apple-iphone-11-2019.jpg?w=300"
                priority // ei picture age load hobe
                placeholder='blur'
                blurDataURL='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAQlBMVEX///+hoaGenp6ampr39/fHx8fOzs7j4+P8/Pyvr6/d3d3FxcX29va6urqYmJjs7OzU1NSlpaW1tbWtra3n5+e/v78TS0zBAAACkUlEQVR4nO3b63KCMBCGYUwUUVEO6v3fagWVY4LYZMbZnff51xaZ5jON7CZNEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQb5tvI8qzX4/nH84XG5Upfj2ir2V2E5fZ/XpIX9saMnhkYLIkiyRJjdgMoiEDMmiQgfwM8rSu77ew2wnPoLTmwdZBs0J2BuXrYckcQm4nOoP+WcmWAbcTnUHZPy9eA24nOoN7n0HI54ToDM5k8PjluwyqgNuJzqDoaugPg8gWZ4noDAYLwuIg75fLeeHHsjNIzrZJwWwW+0DNsmEWPjiEZ5AcD8ZUu8VZ8HyQMifvBdIz+PS33i8adu+7Qn4Gn1Tdupl7rlCfQb9seosK7RkcBy1o30iVZ5CPOtDW3WhQnsF13IV3v0p3BqfJRoSpXVepzmA/24+yqeMyzRm4tqOs44lSUwa3yfgOri25av5CPRnklR33VlPnrqSZV09qMsiqSWV082xOz1uPajJ49pTM/f115k6guWa6JGjJ4N1lt8fXN2rv/vysjFaSQdFXBc/KKF04ptFPliclGVR9Bu27XCyeVOkmy5OODAZN9rYyyip/AIPJ8qIig+PoXbf7YdPdncFoSdCQQT4ZceV+MhiFMBy0hgyu0yGvOLI17KwpyGBaHK5jtt0N5GcwLw7XZdB31sRn8O+ziqYro8Vn4CwOV+k6a9Iz+PwRsKC7h+gMfMXhKu/OmuwM/MXhKq8yWnYG/uJw5Uxoy2jRGZTBZ/jboxuSM1guDtdNhKazJjiDbNMe0AxzKUVnkO+jEJxBxNtJzWCTxlNLzSB8KehJ/H+mJGYAjaDjzj9SnHZRuXZiAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAECXP1XDHv7U4SNFAAAAAElFTkSuQmCC'
            />


            <Image 
                alt='Phofne'
                width={200}
                height={300}
                src="https://m.media-amazon.com/images/I/71BcNVNnJDL._AC_SL1500_.jpg"
               
                layout='fixed'
                
                // layout='fixed'
            />

            <Image 
                alt='Phoffne'
                width={200}
                height={300}
                src="https://m.media-amazon.com/images/I/71BcNVNnJDL._AC_SL1500_.jpg"
                layout='responsive'
                // layout='fixed'
                
                // layout='fixed'
            />

            <Image 
                alt='Phofffne'
                width={200}
                height={300}
                src="https://m.media-amazon.com/images/I/71BcNVNnJDL._AC_SL1500_.jpg"
                layout='responsive'
                // layout='fixed'
                
                // layout='fixed'
            />

            <Image 
                alt='Phonefff'
                width={200}
                height={300}
                src="https://m.media-amazon.com/images/I/71BcNVNnJDL._AC_SL1500_.jpg"
                layout='responsive'
                // layout='fixed'
                
                // layout='fixed'
            />

            <Image 
                alt='Phonsdsde'
                width={200}
                height={300}
                src="https://m.media-amazon.com/images/I/71BcNVNnJDL._AC_SL1500_.jpg"
                layout='responsive'
                // layout='fixed'
                
                // layout='fixed'
            />

            <Image 
                alt='Phonfeee'
                width={200}
                height={300}
                src="https://m.media-amazon.com/images/I/71BcNVNnJDL._AC_SL1500_.jpg"
                layout='responsive'
                // layout='fixed'
                
                // layout='fixed'
            />



        </div>
    );
};

export default page;