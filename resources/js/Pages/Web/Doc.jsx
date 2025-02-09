import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";
import { Head } from '@inertiajs/react';
import Navbar from '@/Components/Navbar';
import Sidebar from '@/Components/Sidebar';

const Doc = () => {
    return (
        <>
            <Head title="Documentation" />
            <Navbar/>
            <div className="w-full flex">
                <div className="w-1/5">
                    <Sidebar />
                </div>
                <div className="w-4/5 p-10">
                    <div className="bg-teal-900 text-white rounded-xl p-5">
                        <h1 className="text-2xl font-bold">Welcome to the Docs</h1>
                        <p className="mt-2 text">
                        The Bear API allows developers to access information about the FX-produced series starring Jeremy Allen White, which has three seasons.
                        </p>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Doc;
