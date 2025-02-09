import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";
import { Head } from '@inertiajs/react';
import Navbar from '@/Components/Navbar';

const Doc = () => {
    return (
        <>
            <Head title="Documentation" />
            <Navbar/>
            <div className="bg-white">
                <h2>Hola documentation</h2>
            </div>
        </>
    );
};

export default Doc;
