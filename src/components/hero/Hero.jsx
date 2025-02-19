import "./hero.css";
import Speech from "./Speech";

const Hero = () => {
    return <div className="hero">
        <div className="hSection left">
            {/*TITLE*/}
            <h1 className="hTitle">
                Hey there<br />
                <span>Im OZ</span>
            </h1>
            <div className="awards"><h2>Data Engineer</h2>
                <p>more info</p>
                <div className="awardList">
                    <img src="/award1.png" alt="award1" />
                    <img src="/award2.png" alt="award2" />
                    <img src="/award3.png" alt="award3" />
                </div>
            </div>
            {/*SCROLL SVG*/}
            <a href="#services" className="scroll">
                <svg
                    width="50px"
                    height="50px"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M5 9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V15C19 18.866 15.866 22 12 22C8.13401 22 5 18.866 5 15V9Z"
                        stroke="white"
                        strokeWidth="1"
                    />
                    <path
                        d="M12 5V8"
                        stroke="white"
                        strokeWidth="1"
                        strokeLinecap="round"
                    />
                </svg>
            </a>
        </div>
        <div className="hSection right">
            {/*FOLLOW*/}
            <div className="follow">
                <a href="/">
                    <img src="/instagram.png" alt="" />
                    <img src="/linkedin.png" alt="" />
                    <img src="/twitter.png" alt="" />
                    <img src="/facebook.png" alt="" />
                </a>
                {/*BUBBLE*/}
                <Speech />
                {/*CERTIFICATE*/}
                <div className="certificate">
                    <img src="/certificate.png" alt="" />
                    PYTHON CERTIFIED
                    <br />
                    DATA ENGINEER
                    <br />
                    UMUZI.ORG
                </div>
                {/*CONTACT BUTTON*/}
                <a href="/contact">
                    <div className="contactButton">
                        <svg viewBox="0 0 200 200" width="150" height="150">
                            <circle cx="100" cy="100" r="90" fill="pink" stroke="white" strokeWidth="2" />
                            <path
                                id="innerCirclePath"
                                fill="none"
                                d="M 100, 100 m -60,0 a 60,60 0 1,1 120,0 a 60,60 0 1,1 -120,0"
                            />
                            <text className="circleText">
                                <textPath href="#innerCirclePath">Hire Now •</textPath>
                            </text>
                            <text className="circleText">
                                <textPath href="#innerCirclePath" startOffset="45%">Contact Me •</textPath>
                                </text>

                        </svg>
                        <div className="arrow">
                            <svg
                                width="50"
                                height="50"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                stroke="white"
                                strokeWidth="2"
                            >
                                <line x1="6" y1="18" x2="18" y2="6" />
                                <polyline points="9 6 18 6 18 15" />
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>;
};

export default Hero;