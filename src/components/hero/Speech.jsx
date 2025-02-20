import { TypeAnimation } from 'react-type-animation';

const Speech = () => {
    return (
        <div className="bubbleContainer">
            <div className="bubble">
            <TypeAnimation
      sequence={[
        1000,
        "Same substring at the start will only be typed out once, initially",
        1000,
        'I code in Python',
        1000, // wait 1s before replacing "Mice" with "Hamsters"
        'I code in JavaScript',
        1000,
        'I code in HTML',
        1000,
        'I code in CSS',
        1000
      ]}
      wrapper="span"
      speed={40}
      deletionSpeed={60}
      repeat={Infinity}
    />
            </div>
            <img src="/man.png" alt=""/>
        </div>
    )
}   

export default Speech