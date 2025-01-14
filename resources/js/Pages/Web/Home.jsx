import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";

const Home = () => {
    return (
        <>
            <div className="bg-black h-screen">
                <div className="grid justify-center">
                    <div className="h-screen p-48">
                        <img
                            src="assets/images/logo.png"
                            alt=""
                            className="img-fluid w-48 mx-auto"
                        />
                        <p className="text-white mt-3 text-lg text-center w-2/3 mx-auto">
                            <span className="font-bold">The Bear API</span> allows developers to access information
                            about the FX-produced series starring Jeremy Allen
                            White, which has three seasons.
                        </p>
                        <div className="flex justify-center mt-5">
                            <PrimaryButton className="mx-1">Get started</PrimaryButton>
                            <SecondaryButton className="mx-1">Repository</SecondaryButton>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Home;
