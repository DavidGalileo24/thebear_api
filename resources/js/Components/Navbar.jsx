import { Link, usePage } from "@inertiajs/react";
import SecondaryButton from "@/Components/SecondaryButton";

export default function Navbar({}) {
    return (
        <>
            <div className="bg-black p-4 flex justify-around">
                <div className="w-1/3">
                    <img
                        src="assets/images/logo.png"
                        className="img-fluid w-36"
                    />
                </div>
                <div className="text-white w-2/3 flex justify-end items-center">
                    <Link
                        className="mx-3"
                        href={route("home")}
                        active={route().current("home")}
                    >
                        Home
                    </Link>
                    <Link
                        className="mx-3"
                        href={route("docs")}
                        active={route().current("docs")}
                    >
                        Documentation
                    </Link>
                    <Link href="/docs">
                        <SecondaryButton className="mx-1">
                            Support
                        </SecondaryButton>
                    </Link>
                </div>
            </div>
        </>
    );
}
